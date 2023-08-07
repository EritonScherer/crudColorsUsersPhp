<?php
namespace app\models;
use Connection;
use PDO;

require_once '../connection.php';

class UserColors
{
    public static function registerUserColors($colorId, $userId){

        $connection = new Connection;
        $sql = "INSERT INTO user_colors (user_id, color_id) VALUES ('$userId', '$colorId')";
        $prepare = $connection->query($sql);

        return $prepare->fetch();
    }

    public static function showColorsUsers(){

        $connection = new Connection;
        $sql = "SELECT
                    u.id as userId,
                    u.name as userName,
                    u.email as userEmail,
                    c.name as userColor
                FROM user_colors AS uc
                    INNER JOIN users AS u ON (uc.user_id = u.id)
                    INNER JOIN colors AS c ON (uc.color_id = c.id)";
        $prepare = $connection->query($sql);
        return $prepare->fetchAll(PDO::FETCH_ASSOC);

    }

    public static function deleteUserColors($id){
        $connection = new Connection;
        $sql = "DELETE FROM user_colors WHERE user_id = '$id'";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

    public static function searchUser($id){
        $connection = new Connection;
        $sql = "SELECT * FROM user_colors WHERE user_id = '$id'";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

    public static function updateUserColors($colorId, $userId){

        $connection = new Connection;
        $sql = "UPDATE user_colors
        SET color_id = '$colorId'
        WHERE user_id = '$userId'";
        $prepare = $connection->query($sql);
        return $prepare->fetch();
    }

    public static function userNotUserColors($userId){
        $connection = new Connection;
        $sql = "SELECT
                    u.id as userId,
                    u.name as userName,
                    u.email as userEmail,
                    c.name as userColor
                FROM user_colors AS uc
                    INNER JOIN users AS u ON (uc.user_id = u.id)
                    INNER JOIN colors AS c ON (uc.color_id = c.id)
                WHERE NOT uc.user_id = $userId";
        $prepare = $connection->query($sql);
        return $prepare->fetchAll(PDO::FETCH_ASSOC);
        
    }

}