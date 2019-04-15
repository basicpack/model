<?php
//Criado por Anderson Ismael
//20 de Dezembro de 2018

function model($name){
    $filename=ROOT.'app/model/'.$name.'.php';
    if(file_exists($filename)){
        return require_once($filename);
    }else{
        die('model <b>'.$name.'</b> not found');
    }
}

