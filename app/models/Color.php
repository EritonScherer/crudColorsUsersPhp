<?php
namespace app\models;
use Connection;
use PDO;

require_once '../connection.php';

class Color
{
    public static function searchColor(int $id){

        $connection = new Connection;
        $sql = "SELECT * FROM colors WHERE id = '$id'";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

    public static function searchColorName(string $color){

        $connection = new Connection;
        $sql = "SELECT * FROM colors WHERE name = '$color'";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

    public static function searchColorAll(){

        $connection = new Connection;
        $sql = "SELECT * FROM colors";
        $prepare = $connection->query($sql);
        return $prepare->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function registerColor(string $name){

        $connection = new Connection;
        $sql = "INSERT INTO colors('name') VALUES('$name')";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

    public static function deleteColor(int $id){

        $connection = new Connection;
        $sql = "DELETE FROM colors WHERE id = '$id'";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

}