<?php

class Article
{
    public static function getAll ($connection) {
        $sql = "SELECT * FROM article"; 
        $result = $connection -> query($sql); 
        return $result -> fetchAll(PDO::FETCH_ASSOC); 
    }

    public static function getById ($connection, $id, $columnName = "*") {
        $sql = "SELECT $columnName FROM article WHERE id = :id";
    
        $stmt = $connection -> prepare($sql);
        $stmt -> bindValue(":id", $id, PDO::PARAM_INT);
    
        if ($stmt -> execute()) {
            return $stmt -> fetch(PDO::FETCH_ASSOC);
        } 
    }

}
