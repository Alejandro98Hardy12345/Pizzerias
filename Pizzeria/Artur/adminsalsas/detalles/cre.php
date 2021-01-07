<?php
    include ('../../php/conexion.php');
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristicas=$_POST['caracteristicas'];
    $id=$_POST['id_pizza'];
    echo($nombre." ".$precio." ".$caracteristicas);
    $consulta="INSERT INTO `agregados_pizza`(`nombre_agregado_pizza`, `precio_agregado_pizza`, `caracterisitcas_agregado_pizza`,`id_entrada`) VALUES ('$nombre','$precio','$caracteristicas','$id')";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se creo con exito.') </script> <script>window.history.go(-1)</script>";
        echo("Hola");
        Header("Location: detalles.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: detalles.php?err=$mensaje");
    }

?>