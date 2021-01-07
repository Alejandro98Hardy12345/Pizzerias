<?php
    include ('../../php/conexion.php');
    $id=$_POST['id'];
    $boton=$_POST['boton'];
    if($boton=="Editar"){
        Header("Location: edit.php?id=$id");
    }else if($boton=="Borrar"){
        $consulta="DELETE FROM `postres` WHERE id_postre=$id";
        $resultado=$mysqli->query($consulta);
        if($resultado==TRUE){
            $mensaje=" <script language='javascript'> alert('El registro se borro con exito.') </script> <script>window.history.go(-1)</script>";
            Header("Location: addpostres.php?err=$mensaje");
        }else{
            $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
            Header("Location: addpostres.php?err=$mensaje");
        }
        
    }else{
        Header("Location: detalles/detalles.php?id=$id");
    }
?>