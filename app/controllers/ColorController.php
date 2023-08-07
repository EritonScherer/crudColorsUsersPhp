<?php
namespace app\controllers;

use app\models\Color;
use app\models\User;

class ColorController
{
    public function show($id){
        
        $color = Color::searchColor($id);
        return Controller::view('colors', array($color));
    }

    public function showAll(){

        $colors = Color::searchColorAll();
        return Controller::view('colors', $colors);
    }

    public function store($dataColor){

        $color = strtoupper($dataColor->colorName);
        $findColor = Color::searchColorName($color);

        if(!$findColor) {
            Color::registerColor($color);
            $colorValid = true;
        }else{
            $colorValid = false;
        }
        return Controller::view('colorRegister', [
            'colorName' => $color,
            'colorValid' => $colorValid
        ]);
    }

    public function destroy($dataColor){
        
        $colorId = $dataColor->colorId;

        if($colorId  ==='Selecione a cor'){
            $colorValid = false;
        }else{
            $colorDelete = Color::searchColor($colorId);
            Color::deleteColor($colorId);
            $colorValid = true;
        }

        return Controller::view('colorDelete', [
             'colorName' => $colorDelete,
             'colorValid' => $colorValid
         ]);
    }

}