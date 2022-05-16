<?php

class Article
{
    public $id;
    public $title;
    public $description;
    public $published_at;

    public static function getAll ($connection) {
        $sql = "SELECT * FROM article"; 
        $result = $connection -> query($sql); 
        return $result -> fetchAll(PDO::FETCH_ASSOC); 
    }

    public static function getById ($connection, $id, $columnName = "*") {
        $sql = "SELECT $columnName FROM article WHERE id = :id";
    
        $stmt = $connection -> prepare($sql);
        $stmt -> bindValue(":id", $id, PDO::PARAM_INT);
    
        $stmt -> setFetchMode(PDO::FETCH_CLASS, 'Article');

        if ($stmt -> execute()) {
            return $stmt -> fetch();
        } 
    }

}
