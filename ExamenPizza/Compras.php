<?php
include "Coneccion.php";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Xtrema</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic" rel="stylesheet" type="text/css" />
        <!-- Third party plugin CSS-->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css.css" rel="stylesheet" />
    </head>
    <style>
        body{
            background: linear-gradient(to right #000000, #33AEFF), url("https://dam.cocinafacil.com.mx/wp-content/uploads/2019/03/pizza-gourmet-01.jpg");

        }
      :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: 0.75rem;
}

.login,
.image {
  min-height: 100vh;
}

.bg-image {
  background-image: url('https://d1ralsognjng37.cloudfront.net/8fbe9b1a-d399-4d80-a4f7-d0227eefae9d.jpeg');
  background-size: cover;
  background-position: center;
}

.login-heading {
  font-weight: 300;
}

.btn-login {
  font-size: 0.9rem;
  letter-spacing: 0.05rem;
  padding: 0.75rem 1rem;
  border-radius: 2rem;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
  height: auto;
  border-radius: 2rem;
}

.form-label-group>label {
  position: absolute;
  top: 0;
  left: 0;
  display: block;
  width: 100%;
  margin-bottom: 0;
  /* Override default `<label>` margin */
  line-height: 1.5;
  color: #495057;
  cursor: text;
  /* Match the input under the label */
  border: 1px solid transparent;
  border-radius: .25rem;
  transition: all .1s ease-in-out;
}

.form-label-group input::-webkit-input-placeholder {
  color: transparent;
}

.form-label-group input:-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-ms-input-placeholder {
  color: transparent;
}

.form-label-group input::-moz-placeholder {
  color: transparent;
}

.form-label-group input::placeholder {
  color: transparent;
}

.form-label-group input:not(:placeholder-shown) {
  padding-top: calc(var(--input-padding-y) + var(--input-padding-y) * (2 / 3));
  padding-bottom: calc(var(--input-padding-y) / 3);
}

.form-label-group input:not(:placeholder-shown)~label {
  padding-top: calc(var(--input-padding-y) / 3);
  padding-bottom: calc(var(--input-padding-y) / 3);
  font-size: 12px;
  color: #777;
}

/* Fallback for Edge
-------------------------------------------------- */

@supports (-ms-ime-align: auto) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input::-ms-input-placeholder {
    color: #777;
  }
}

/* Fallback for IE
-------------------------------------------------- */

@media all and (-ms-high-contrast: none),
(-ms-high-contrast: active) {
  .form-label-group>label {
    display: none;
  }
  .form-label-group input:-ms-input-placeholder {
    color: #777;
  }
}
    </style>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="pizza.php">Xtrema</a>
                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto my-2 my-lg-0">
                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="listpizzas.php">Lista de pizzas</a></li>

                    <li class="nav-item"><a class="nav-link js-scroll-trigger" href="pedidos.php">Pedidos</a></li>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="compras.php">Compras</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Masthead-->
        <div class="container-fluid">
                <div class="login d-flex align-items-center py-5">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-9 col-lg-8 mx-auto">
                        <h3 class="login-heading mb-4">Bienvenido</h3>
                        <form>
                        <table class="table card-signin my-5">
    <thead class="thead-dark">
    <tr>
        <th>Nombre</th>

        <th>Domicilio</th>

        <th>Colonia</th>

        <th>Municipio</th>

        <th>Referencia</th>

        <th>Pizza pedida</th>
    </tr>
</thead>
<?php
$query = mysqli_query($mysqli, "SELECT u.iduser, u.Nom_C, u.domicilio, u.colonia, u.municipio, u.Referencia, r.pizza FROM cliente_p u INNER JOIN pizzas r ON u.idpizza = r.idpizza");

$result = mysqli_num_rows($query);
$querqqaqy = mysqli_query($mysqli, "SELECT u.idusuario, u.nombre, u.correo, u.usuario, r.rol FROM usuario u INNER JOIN rol r  ON u.rol = r.idrol ");

$queryres=mysqli_query($mysqli, "SELECT SUM(unidaduno, unidaddos, unidadtres) FROM calificaciones;");


if($result > 0){
    while($data = mysqli_fetch_array($query)){
        
?>
    <tr>
        <td> <?php echo $data["Nom_C"];?> </td>

        <td><?php echo $data["domicilio"]; ?></td>

        <td><?php echo $data["colonia"]; ?></td>

        <td><?php echo $data["municipio"]; ?></td>

        <td><?php echo $data["Referencia"]; ?></td>

        <td><?php echo  $data["pizza"];?></td>

       
    </tr>
    <?php
}
}
    ?>

</table>
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
           
       
        <!-- Bootstrap core JS-->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
