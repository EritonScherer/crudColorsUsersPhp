<?php
namespace app\controllers;

use app\models\Color;
use app\models\User;
use app\models\UserColors;

class HomeController
{
    public function index(){
        
        $users = User::searchUserAll();
        $colors = Color::searchColorAll();
        $userColors = UserColors::showColorsUsers();

        return Controller::view('home', [
            'colors' =>   $colors ,
            'users' =>  $users,
            'userColors' => $userColors
        ]);
    }


}