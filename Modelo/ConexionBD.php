<?php

class Conexion{

    static public function conectar(){

        
        $bd = new PDO("mysql:host=localhost;dbname=pdl_bd","root","");

        $bd -> exec("set names utf8");
        return $bd;
    }
}