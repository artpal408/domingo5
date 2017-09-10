
<h1> Hola estas en la vista de clientes! </h1>
<!--<span>--><?php //echo $mensaje ?><!-- </span>-->

<form method="post" action="../controlador/ClienteControlador.php">

    <input name="nombre"
           placeholder="Escriba su nombre"
           type="text">
    <br>
    
    <input name="apellido"
           placeholder="Escriba su apellido"
           type="text">
    <br>
    
    <input name="edad" 
           placeholder="Digite su edad"
           type="text">
    <br>
    <br>
    <input name="agregar"
           value="Agregar usuario"
           type="submit">
</form>

<?php
foreach ($clientes as $k => $v){
   ?>

<p> <?php echo $v ['nombre'] ?> </p>
<p> <a href="../controlador/ClienteControlador.php?opcion=eliminar&id=<?php echo $v['id']; ?>">Eliminar
    </a>
</p>


 <?php
}?>


