<?php

require_once '../driver.php';

class ClienteModelo{
    private $enlace;

    function __construct()
    {
        $this->enlace= new Dmysqli ();
    }

    function saludar (){
        return 'ESTE MENSAJE VIENE DEL MODELO';
    }
}