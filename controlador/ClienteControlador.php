<?php

require_once '../modelo/Cliente.modelo.php';

$clienteModelo = new ClienteModelo();

$mensaje = $clienteModelo->saludar();

include_once '../vista/cliente.vista.php';