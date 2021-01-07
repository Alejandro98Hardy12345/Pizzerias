<?php
    include ('../../../php/conexion.php');
    $id=$_POST['id'];
    $nombre=$_POST['nombre'];
    $precio=$_POST['precio'];
    $caracteristica=$_POST['caracteristicas'];
    echo($id." ".$nombre." ".$precio." ".$caracteristica);

    $consulta="UPDATE `agregados_pizza` SET `nombre_agregado_pizza` = '$nombre', `precio_agregado_pizza`='$precio', `caracterisitcas_agregado_pizza`='$caracteristica' WHERE `id_agregado_pizza` = $id";
    $resultado=$mysqli->query($consulta);
    if($resultado==TRUE){
        $mensaje=" <script language='javascript'> alert('El registro se modifico con exito.') </script> <script>window.history.go(-1)</script>";
        echo("Hola");
        Header("Location: BienvenidaPizzas.php?err=$mensaje");
    }else{
        $mensaje=" <script language='javascript'> alert('Error.') </script> <script>window.history.go(-1)</script>";
        Header("Location: BienvenidaPizzas.php?err=$mensaje");
    }
    

?>