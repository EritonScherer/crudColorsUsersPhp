<?php
namespace app\controllers;

use app\models\User;

class UserController
{
    public function show($id){

        $user = User::searchUserId($id);
        return Controller::view('users', $user);
    }

    public function showAll(){

        $users = User::searchUserAll();
        return Controller::view('home', [
            'users' => $users
        ]);
    }

    public function store($dataUser){

        $name = strtoupper($dataUser->userName);
        $email = strtolower($dataUser->userEmail);
        $findUser = User::searchUserEmail($email);

        if(!$findUser){
            User::registerUser($name, $email);
            $userValid = true;
        }else{
            $userValid = false;
        }
        return Controller::view('userRegister', [
            'userName' => $name,
            'userEmail' => $email,
            'userValid' => $userValid
         ]);
    }

    public function destroy($dataUser){

        $userId = $dataUser->userId;

        if($userId  === 'Selecione o Usuário'){
            $userValid = false;
        }else{
            $userDelete = User::searchUserId($userId);
            User::deleteUser($userId);
            $userValid = true;
        }
        
        return Controller::view('userDelete',[ 
        'userName' => $userDelete,
        'userValid'=> $userValid
        ]);
    }

}