<?php
    include ('../../php/conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristica=$_POST['caracteristicas'];
    echo($id." ".$nombre." ".$precio." ".$caracteristica);

    $consulta="UPDATE `entradas` SET `nombre` = '$nombre', `precio`='$precio', `caracteristicas`='$caracteristica' WHERE `id_entrada` = $id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se modifico con exito.') </script> <script>window.history.go(-1)</script>";
        echo("Hola");
        Header("Location: ListaEntradas.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: ListaEntradas.php?err=$mensaje");
    }
    

?>