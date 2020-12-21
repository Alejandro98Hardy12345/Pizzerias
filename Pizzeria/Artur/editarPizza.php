<?php
include('../php/conexion.php');
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
$caracteristicas=$_POST['caracteristicas'];

?>
<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ordenar aqui</title>
    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../css.css" rel="stylesheet">
    <style>
        body{
            margin: 0;
            padding: 0;
            background-image: #900C3F;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            font-family: Tahoma, sans-serif;
            background-attachment: fixed;
        }
        .form-area{
            margin: 20px;
            background: rgba(0,0,0,0.5);
            color: #fff;
            padding: 40px;
        }
        .form-area h4 {
           
            color: #fff;
            
        }
        .form-area h5 {
           
           color: #fff;
           
       }
        h3{
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #ffffff;
        }
        .form-area p{
            margin: 0;
            padding: 0;
            font-weight: bold;
            color: #ffffff;
        }
        .form-area input,select{
            margin-bottom: 20px;
            width: 100%;
        }
        .form-area input[type=text],
        .form-area input[type=password]{
            border: none;
            border-bottom: 1px solid #ffffff;
            background-color: transparent;
            outline: none;
            height: 40px;
            color: #ffffff;
            display: 16px;

        }
        ::placeholder{
            color: #ffffff;
        }
        .form-area select{
            margin-top: 20px;
            padding: 10px 0;
        }
        .form-area input[type=submit]{
            border: none;
            height: 40px;
            outline: none;
            color: #ffffff;
            font-size: 15px;
            background-color: tomato;
            cursor: pointer;
            border-radius: 20px;
        }
        .form-area input[type=submit]:hover{
            background-color: cyan;
            color: #ffffff;

        }
        .form-area a{
            color: #ffffff;
            text-decoration: none;
            font-size: 14px;
            font-weight: bold;

        }
        .carousel-item {
        height: 65vh;
        min-height: 350px;
        background: no-repeat center center scroll;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        }
        .imagen-pizza{
        width:100px;
        }
        .table{
        
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background:#0000009b;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="../index.php">Hilo Frito</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pizzas.php">Pizzas</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="promosiones.php">Promociones</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="Bebidas.php">Bebidas</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pedidos.php">Pedidos</a></li>
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="InicioSesion.php">Iniciar Sesión</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <!-- Slide One - Set the background image for this slide in the line below -->
              <div class="carousel-item active" style="background-image: url('https://images.alphacoders.com/276/276653.jpg')">
                <div class="carousel-caption d-none d-md-block" style="background:#0000009b;">
                  <h3 class="display-4" > La extra queso JUMBO</h3>
                  <p class="lead">La reian de los quesos.</p>
                </div>
              </div>
              <!-- Slide Two - Set the background image for this slide in the line below -->
              <div class="carousel-item" style="background-image: url('https://wallpaperaccess.com/full/424487.jpg')">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="display-4">Second Slide</h3>
                  <p class="lead">This is a description for the second slide.</p>
                </div>
              </div>
              <!-- Slide Three - Set the background image for this slide in the line below -->
              <div class="carousel-item" style="background-image: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCf2vz1E0s1rJYyOMSMDIemGyDuGFQe7LhZA&usqp=CAU')">
                <div class="carousel-caption d-none d-md-block">
                  <h3 class="display-4">Third Slide</h3>
                  <p class="lead">This is a description for the third slide.</p>
                </div>
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
                </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
                </a>
          </div>
  </header>
<div class="form-area">
    <table class="table">
    <?php
      $query="SELECT * FROM pizza WHERE nombre LIKE '$nombre'";
      $resultado=$mysqli->query($query);
      if($resultado->num_rows > 0){
        $fila=$resultado->fetch_assoc();
        echo(" ".$fila['id_pizza']." ".$fila['nombre']." ".$fila['precio']." ".$fila['caracteristicas']."<br>");
        $id_pizza=$fila['id_pizza'];
        $detalle="SELECT * FROM agregados_pizza WHERE id_entrada LIKE $id_pizza";
        $resultado_detalle=$mysqli->query($detalle);
        
    ?>
    <h1>
        <?php
            echo($fila['nombre']);
        ?>
    </h1>
    <h3>
    <?php
            echo($fila['caracteristicas']);
            echo("");
        ?>
        
    </h3>
        <tr>
            <th>
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSCf2vz1E0s1rJYyOMSMDIemGyDuGFQe7LhZA&usqp=CAU" alt="">
            </th>
            <th>
                <h3>Elige el complemento</h3>
                <form action="../compra.php">
                    <?php
                    while($fila_detalle=$resultado_detalle->fetch_assoc()){
                    ?>
                    <p><?php echo($fila_detalle['nombre_agregado_pizza'])?></p>
                    <h4><?php echo($fila_detalle['caracterisitcas_agregado_pizza'])?></h4>
                    <h5><?php echo("$".$fila_detalle['precio_agregado_pizza'])?></h5>
                    <input type="radio" id="menos18" value="menos18" name="edad"/>
                    
                    <!--<select name="" id="">
                        <option value="">
                        
                        </option>
                        <option value="">
                        Cual es el nombre de tu mama?
                        </option>
                        <option value="">
                        Cual es el nombre de tu escuela?
                        </option>
                        <option value="">
                        cual es el nombre de tu mascota?
                        </option>
                    </select>-->
                    <?php
                    }
                    ?>

                    <input type="submit" value="Añadir a la orden">
                   
                </form>
            </th>
        </tr>
    </table>
        
    </div>
    <?php
      }
    
    ?>
    
</body>
</html>