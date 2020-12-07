<?php
include('php/conexion.php');
?>
<!DOCTYPE html>
<html lang="es">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Hielo Frito Pizzas</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css.css" rel="stylesheet">

</head>
<style>
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
</style>
<body>

  <!-- Navigation -->
  <body id="page-top">
    <!-- Navigation-->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav" style="background:#0000009b;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="index.php">Hilo Frito</a>
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

 
 
   <!-- Page Content -->
   <div class="container">

    <h1 class="my-4">Elije tu pizza</h1>
    
    <!-- Marketing Icons Section -->
    <div class="row">
    <?php
      $query1="SELECT * FROM pizza WHERE nombre LIKE 'Hawaiana'";
      $resultado1=$mysqli->query($query1);
      if($resultado1->num_rows > 0){
        $fila1=$resultado1->fetch_assoc();
    ?>
      
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header" style="color: white;">
        <?php
        echo($fila1['nombre']);
        ?>
        </h4>
          <div class="card-body">
            <p class="card-text" style="text-align: center; color: rgb(255, 255, 255); background: rgba(128, 0, 0, 0.575);"><strong style="color: orangered;">Ingredientes:</strong> 
              <br>
              <?php
              echo($fila1['caracteristicas']);
              ?><br>
              <strong style="color: rgb(59, 185, 0);">Precio</strong>  <br> 
              <?php
              echo("$".$fila1['precio']);
              ?> <br><br>
            <img width="310" height="200" src="https://cdn1.cocina-familiar.com/recetas/pizza-hawaiana-con-masa-casera.JPG" alt="">  
          </p>
          </div>
          <div class="card-footer">
          
            <a href="compra.php" class="btn btn-primary">Ordenar aqui</a>
    
          </div>
        </div>
      </div>
      
      <?php
      }else{
        echo ("<h1>Pizza no disponible</h1>");
      }
      ?>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header" style="color: white;">Carnes frias</h4>
          <div class="card-body">
            <p class="card-text" style="text-align: center; color: rgb(255, 255, 255); background: rgba(128, 0, 0, 0.575);"><strong style="color: orangered;">Detalles:</strong> 
              <br>
              La pizza para los amantes de la carne. <br> 
              <strong style="color:rgb(59, 185, 0);">Ingredientes:</strong>  <br> Pepperoni,Salami, pepperoni, jamón, finas hierbas.
        <br><br> <img width="310" height="200" src="https://italianissimo.mx/wp-content/uploads/2014/04/photodune-5347516-traditional-pizza-and-ingredients-xs1.jpg" alt="">  
      </p>
      </div>
          <div class="card-footer">
            <a href="compra.php" class="btn btn-primary">Ordenar aqui</a>
          </div>
        </div>
      </div>
      <div class="col-lg-4 mb-4">
        <div class="card h-100">
          <h4 class="card-header" style="color: white;">Cuatro quesos</h4>
          <div class="card-body">
            <p class="card-text" style="background: rgba(128, 0, 0, 0.575); text-align: center; color: rgb(255, 255, 255);" ><strong style="color: orangered;">Detalles:</strong>  
              <br>
              La pizza pensada en los amantes del queso. <br>
              <strong style="color:rgb(59, 185, 0);">Ingredientes:</strong> <br> Queso mozzarella, queso crema, queso cheddar, queso.
            <br><br><img width="310" height="200" src="https://vod-hogarmania.atresmedia.com/cocinatis/images/images01/2019/04/11/5caf542f1f4daa0001932466/1239x697.jpg" alt="">    
          </p>
          </div>
          <div class="card-footer">
            <a href="compra.php" class="btn btn-primary">Ordenar aqui</a>
          </div>
        </div>
      </div>
    </div>
    <!-- /.row -->

    <?php
   $query="SELECT * FROM pizza";
   $resultado=$mysqli->query($query);
   if($resultado->num_rows > 0){
     ?>
  <table class="table">
  <tr>
    <th>
    Imagen
    </th>
    <th>
      Nombre

    </th>
    <th>
      Datos
    </th>
    
  </tr>
  <?php
  while($fila=$resultado->fetch_assoc()){
    $nombre=$fila['nombre'];
    $precio=$fila['precio'];
    $caracteristicas=$fila['caracteristicas'];
  ?>
  <form action="#">
    <tr>
      <th >
        <img src="https://cdn1.cocina-familiar.com/recetas/pizza-hawaiana-con-masa-casera.JPG" alt="" class="imagen-pizza">
      </th>
      <th>
        <h3>
        <?php
         echo "$nombre<input type='text' value='$nombre' name='id' hidden>"; 
          
        ?>
        </h3>
        
      </th>
      <th>
      <p>
        <?php

          echo "$caracteristicas<input type='text' value='$caracteristicas' name='id' hidden>"; 
        ?>
        </p>  
        <p>
        <?php
          echo " $precio<input type='text' value=' $precio' name='id' hidden>"; 
        ?>
        </p>
      </th>
      <th>
      <input type="submit" value="Prepara a tu gusto">
      </th>
    </tr>
  </form>
  <?php
  }
  ?>
  
  </table>

  <?php
   }else{
     echo ("<h1>NO HAY PIZZAS</h1>");
   }
  ?>

  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
      <p class="m-0 text-center text-white">Copyright &copy; Hilo Frio 2020</p>
    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
