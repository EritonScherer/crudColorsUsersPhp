<?php
namespace app\models;
use Connection;
use PDO;

require_once '../connection.php';

class User
{
    public static function searchUserId(int $id){

        $connection = new Connection;
        $sql = "SELECT * FROM users WHERE id = '$id'";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

    public static function searchUserEmail(string $email){

        $connection = new Connection;
        $sql = "SELECT * FROM users WHERE email = '$email'";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

    public static function searchUserAll(){

        $connection = new Connection;
        $sql = "SELECT * FROM users";
        $prepare = $connection->query($sql);
        return $prepare->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function registerUser(string $name, string $email){

        $connection = new Connection;
        $sql = "INSERT INTO users('name', 'email') VALUES('$name', '$email')";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

    public static function deleteUser(int $id){

        UserColors::deleteUserColors($id);
        
        $connection = new Connection;
        $sql = "DELETE FROM users WHERE id = '$id'";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

}
