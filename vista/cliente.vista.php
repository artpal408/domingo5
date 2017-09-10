
<h1> Hola estas en la vista de clientes! </h1>
<span><?php echo $mensaje ?> </span>

<?php
foreach ($clientes as $k => $v){
   ?>

<p> <?php echo $v ['nombre'] ?> </p>
<p> <a href="../controlador/ClienteControlador.php?opcion=eliminar&id=<?php echo $v['id']; ?>">Eliminar
    </a>
</p>


 <?php
}?>


