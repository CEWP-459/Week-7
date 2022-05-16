<?php

class Article
{
    public $id;
    public $title;
    public $content;
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

    public function update ($connection) {

        $sql = "UPDATE  article 
                SET     title = :title, 
                        content = :content, 
                        published_at = :published_at
                WHERE   id = :id";

        $stmt = $connection -> prepare($sql);

        $stmt -> bindValue(':id', $this -> id, PDO::PARAM_INT);
        $stmt -> bindValue(':title', $this -> title, PDO::PARAM_STR);
        $stmt -> bindValue(':content', $this -> content, PDO::PARAM_STR);

        if ($this -> published_at == '') {
            $stmt -> bindValue(':published_at', null, PDO::PARAM_NULL);
        } else {
            $stmt -> bindValue(':published_at', $this -> published_at, PDO::PARAM_STR);
        }

        return $stmt -> execute();

    }

}
