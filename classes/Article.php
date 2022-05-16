<?php

class Article
{
    public static function getAll($connection)
    {    
        $sql = "SELECT * FROM article"; 
        $result = $connection -> query($sql); 
        return $result -> fetchAll(PDO::FETCH_ASSOC); 
    }
}
