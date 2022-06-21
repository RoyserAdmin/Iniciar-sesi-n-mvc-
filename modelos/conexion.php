<?php

class Conexion{
    public function conectar(){
        $link = new PDO("mysql:host=localhost:3307; dbname=login_usuarios", "root", "root");
        return $link;
    }
}
