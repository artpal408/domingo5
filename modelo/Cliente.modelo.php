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

    function eliminarCliente($id){
        $consulta = "DELETE FROM cliente WHERE id = " . $id;
        return $this->enlace->query($consulta);
    }
    function desactivarCliente($id){
        $consulta = "UPDATE cliente set activo = 0 WHERE id = " . $id;
        return $this->enlace->query($consulta);
    }

    function obtenerClientes(){
        $consulta = "SELECT * FROM cliente WHERE activo = 1";
        return $this->enlace->multiples_datos($consulta);
    }
}