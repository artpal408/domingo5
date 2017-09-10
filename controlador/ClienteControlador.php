<?php

require_once '../modelo/Cliente.modelo.php';

$clienteModelo = new ClienteModelo();

if (!empty ($_GET ['opcion'])){
    if ($_GET['opcion']=="eliminar"){
        echo 'tu lo que quieres es eliminar';
        echo '</br>';
        echo 'ID a eliminar: ' . $_GET['id'];
    }
};

$mensaje = $clienteModelo->saludar();
$clientes = $clienteModelo->obtenerClientes();


include_once '../vista/cliente.vista.php';