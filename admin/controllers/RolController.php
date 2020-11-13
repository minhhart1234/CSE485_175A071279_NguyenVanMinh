<?php

include_once "models/Rol.php";
include_once "Controller.php";

class RolController
{
    public function index(){

        include_once "views/rols/index.php";
    }public function add(){
    include_once "views/rols/add.php";
}
    public function create(){
        $name = getValue('name' ,'post');
        if($name !=""){
            $rol = new Rol();
            $rol->insert($name);
        }

    }
}