<?php
include '../plantilla/header.php';
include ('../../php/conexion.php');
$id=$_GET['id'];
echo($id);
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Dashboard - SB Admin</title>
        <link href="../styles.css" rel="stylesheet" />
        <link href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css" rel="stylesheet" crossorigin="anonymous" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <style>
        :root {
  --input-padding-x: 1.5rem;
  --input-padding-y: .75rem;
}

body {
  background: #007bff;
  background: linear-gradient(to right, #0062E6, #33AEFF);
}

.card-signin {
  border: 0;
  border-radius: 1rem;
  box-shadow: 0 0.5rem 1rem 0 rgba(0, 0, 0, 0.1);
}

.card-signin .card-title {
  margin-bottom: 2rem;
  font-weight: 300;
  font-size: 1.5rem;
}

.card-signin .card-body {
  padding: 2rem;
}

.form-signin {
  width: 100%;
}

.form-signin .btn {
  font-size: 80%;
  border-radius: 5rem;
  letter-spacing: .1rem;
  font-weight: bold;
  padding: 1rem;
  transition: all 0.2s;
}

.form-label-group {
  position: relative;
  margin-bottom: 1rem;
}

.form-label-group input {
  height: auto;
  border-radius: 2rem;
}

.form-label-group>input,
.form-label-group>label {
  padding: var(--input-padding-y) var(--input-padding-x);
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

.btn-google {
  color: white;
  background-color: #ea4335;
}

.btn-facebook {
  color: white;
  background-color: #3b5998;
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
    <body style="background: linear-gradient(to right, #6b6b6b, #612103);" class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <a class="navbar-brand" href="BienvenidaPizzas.php">Hielo Frito</a>
            <button class="btn btn-link btn-sm order-1 order-lg-0" id="sidebarToggle" href="#"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <div class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
                        <a class="btn btn-primary"  href="../../php/cerrarsesion.php">Cerrar Sesion</a>        
            </div>
            <!-- Navbar-->
        </nav>

        <!-- Barra de Opciones -->
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading"></div>
                            <a class="nav-link" href="viewpedidos.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Ordenes
                            </a>
                            <a class="nav-link" href="../adminPizzas/BienvenidaPizzas.php">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Administración de Pizzas
                            </a>
                            <a class="nav-link" href="addpromos.html">
                              <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                              Administración de Promociones
                          </a>
                          <a class="nav-link" href="viewpedidos.html">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Bebidas
                        </a>
                        <a class="nav-link" href="../adminentradas/ListaEntradas.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Entradas
                        </a>
                        <a class="nav-link" href="../adminpostres/addpostres.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Postres
                        </a>
                        <a class="nav-link" href="ListaSalsa.php">
                            <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                            Administracion de Salsas
                        </a>
                           
                        </div>
                    </div>
                    <div class="sb-sidenav-footer">
                        <div class="small">Admistrador</div>
                        Hielo Frito
                    </div>
                </nav>
            </div>
            <?php
                $query="SELECT * FROM salsas WHERE id_salsas=$id";
                $resultado=$mysqli->query($query);
                if($resultado->num_rows > 0){
                    $fila=$resultado->fetch_assoc();
                    $id_pizza=$fila['id_salsas'];
                    $nombre=$fila['nombre'];
                    $precio=$fila['precio'];
                    $caracteristicas=$fila['caracteristicas'];
            ?>
            <!-- Parte del centro -->
            <div id="layoutSidenav_content">
                <main >
                    <div class="container-fluid">
                        <h1 style="color: white;" class="mt-4"> Administrar Salsa</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Qué salsa nueva tendremos?</li>
                        </ol>
                        <div class="">
                            <div class="">
                              <div class="">
                                <div class="card card-signin my-5">
                                  <div class="card-body">
                                    <h5 class="card-title text-center">Modifique la salsa</h5>
                                    <form class="form-signin" action="edi.php" method="post">
                                      
                                      <div class="form-label-group">
                                          <?php
                                            echo "<input type='number' id='inputId' name='id' class='form-control' placeholder='Id usuario' value='$id_pizza' required autofocus>"; 
                                          ?>
                                        <!--<input type="number" id="inputId" name="id" class="form-control" placeholder="ID" required>-->
                                        <label for="inputId">ID</label>
                                      </div>
                                      <div class="form-label-group">
                                      <?php
                                            echo "<input type='text' id='inputNombre' name='nombre' class='form-control' placeholder='Nombre' value='$nombre' required autofocus>"; 
                                          ?>
                                        <!--<input type="text" id="inputNombre" name="nombre" class="form-control" placeholder="Nombre" required>-->
                                        <label for="inputNombre">Nombre</label>
                                      </div>
                                      <div class="form-label-group">
                                        <?php
                                            echo "<input type='number' id='inputPrecio' name='precio' class='form-control' placeholder='Precio' value='$precio' required autofocus>"; 
                                        ?>
                                        <!--<input type="int" id="inputPrecio" name="precio" class="form-control" placeholder="Precio" required>-->
                                        <label for="inputPrecio">Precio</label>
                                      </div>
                                      <div class="form-label-group">
                                      <?php
                                            echo "<input type='text' id='inputCaracteristicas' name='caracteristicas' class='form-control' placeholder='Caracteristicas' value='$caracteristicas' required autofocus>"; 
                                          ?>
                                      <!--<input type="textarea" rows="20" cols="5"id="inputCaracteristicas" name="caracteristicas"class="form-control" placeholder="caracterisiticas" required>-->
                                        <label for="inputCaracteristicas">Caracteristicas</label>
                                      </div>
                                      
                                      <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit">Guardar</button>
                                      <hr class="my-4">
                                    </form>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <?php
                            }  
                              if(isset($_GET['err'])){
                              echo " ".$_GET['err'];  
                            }?>
                    </main>
                    <footer class="py-4 bg-black  mt-auto">
                      <div class="container-fluid">
                          <div class="d-flex align-items-center justify-content-between small">
                              <div class="text-muted">Copyright &copy; Your Website 2020</div>
                              <div>
                                  <a href="#">Privacy Policy</a>
                                  &middot;
                                  <a href="#">Terms &amp; Conditions</a>
                              </div>
                          </div>
                      </div>
                  </footer>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
            <script src="../scripts.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
            <script src="chart-area-demo.js"></script>
            <script src="chart-bar-demo.js"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
            <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
            <script src="../datatables-demo.js"></script>
        </body>
    </html>
    