<?php

require_once '../modelo/Cliente.modelo.php';

$clienteModelo = new ClienteModelo();

if (!empty($_POST['agregar'])){
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];

    $estado = $clienteModelo->agregarCliente($nombre, $apellido, $edad);

    if ($estado == true){
        echo "Exito al agregar cliente";
    }else {
        echo "Fallo al agregar cliente";
    }
}

if (!empty ($_GET ['opcion'])){
    if ($_GET['opcion']=="eliminar"){
        echo 'tu lo que quieres es eliminar';
        echo '</br>';
        echo 'ID a eliminar: ' . $_GET['id'];
        $sePudo = $clienteModelo->desactivarCliente($_GET['id']);

        if ($sePudo == true) {
            echo "Exito al eliminar";
        }else{
            echo "Fallo al eliminar";
        }
    };
}

$mensaje = $clienteModelo->saludar();
$clientes = $clienteModelo->obtenerClientes();


include_once '../vista/cliente.vista.php';