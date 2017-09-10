<?php

require_once '../driver.php';


class ClienteModelo{
    private $enlace;

    function __construct()
    {
        $this->enlace= new Dmysqli ();
    }

    function saludar (){
        return 'ESTE MSJ VIENE DEL MODELO';
    }

    function obtenerClientes(){
        $consulta = "SELECT * FROM cliente";
        return $this->enlace->multiples_datos($consulta);
    }
}