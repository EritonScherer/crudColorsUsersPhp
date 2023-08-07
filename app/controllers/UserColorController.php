<?php
namespace app\controllers;

use app\models\Color;
use app\models\User;
use app\models\UserColors;


class UserColorController
{

    public function store($colrosUsers){
    
        $colorId = $colrosUsers->colorId;
        $userId = $colrosUsers->userId;

        if($colorId  === 'Selecione a Cor' || $userId === 'Selecione o Usuário'){
            $userColorValid = false;
        }else{

            $userColorExist = UserColors::searchUser($userId);
            $userColorValid = true;
            $color = Color::searchColor($colorId);
            $user = User::searchUserId($userId );
            
            
            if($userColorExist){
                $userExist = true;
                $userColorValid = false;
                return Controller::view('userColorRegister',[ 
                    'color' => $color,
                    'user'=> $user,
                    'userColorValid' => $userColorValid,
                    'userExist' => $userExist
                    ]);
            }

            $userExist = false;
            UserColors::registerUserColors($colorId, $userId);

        }

        return Controller::view('userColorRegister',[ 
            'color' => $color,
            'user'=> $user,
            'userColorValid' => $userColorValid,
            'userExist' => $userExist
            ]);
        
    }

    public function update($data){

        $userId = $data->userId;
        $user['name'] = $data->userName;
        $colorId = $data->colorId;
        $color['name'] = $data->colorName;
        $userColorValid = true;
        $userExist = false;

        UserColors::updateUserColors($colorId, $userId);

        return Controller::view('userColorRegister',[ 
            'color' => $color,
            'user'=> $user,
            'userColorValid' => $userColorValid,
            'userExist' => $userExist
            ]);

    }

}