<?php

// Initialize the session
session_start();
require('sesion.php');

// Check if the user is logged in, otherwise redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
  header("location: login.php");
  exit;
}

// Include config file
require_once "config.php";

$rut=$_GET['rut'];


$querycliente="SELECT Nombre, Apellido, Rut, Email, Direccion, Telefono FROM `cliente` WHERE Rut = '$rut'";

$result = mysqli_query($db_connection, $querycliente);
$row = mysqli_fetch_array($result);



$nombre = $row["Nombre"];
$apellido = $row["Apellido"];
$rut = $row["Rut"];
$email = $row["Email"];
$direccion = $row["Direccion"];
$telefono = $row["Telefono"];


?>

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="validarRut.js"></script>
    <script src="buscador.js"></script>
    
    <!--css-->
    <link rel="stylesheet" href="css/styles.css">

    <title>Formulario de Modificacion</title>
  </head>
  <body>
      <div class="container mt-5">
      <div class="page-header">
            <p>Usuario Conectado <b><?php echo htmlspecialchars($_SESSION["rut"]); ?></b>

        </div>
        <p>
            <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
            <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>
            
        </p>

          <?php include './nav.php'; ?>
          <div class="mt-5">
        <?php include './buscador.php'; ?>
        </div>
        <hr>
        <div class="mt-5">
          <form name="myForm" action="update.php" method="POST">
            <h2><em>Formulario de Modificacion cliente Rut: <?php echo $rut;?></em></h2>  
               
                <p class="mt-3">
                    <label for="nombre">Nombre: <span><em>(requerido)</em></span></label>
                    <input type="text" name="nombre" class="form-input" value="<?php echo $nombre;?>"  pattern="[A-Za-z]{5,40}" required/> 
                </p>
                  
                <p>
                    <label for="apellido">Apellido: <span><em>(requerido)</em></span></label>
                    <input type="text" name="apellido" class="form-input" value="<?php echo $apellido;?>"  pattern="[A-Za-z]{5,40}" required/> 
                </p>
                <p>
                    <label for="rut">Rut: <span><em>(requerido)</em></span></label>
                    <input type="text" name="rut" class="form-input" value="<?php echo $rut;?>" required oninput="checkRut(this)"/> 
                </p>
                       
                <p>
                    <label for="email">Email: <span><em>(requerido)</em></span></label>
                    <input type="email" name="email" class="form-input" value="<?php echo $email;?>" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}${5,40}" required/>
                </p>

                <p>
                    <label for="direccion">Dirección: <span><em>(requerido)</em></span></label>
                    <input type="text" name="direccion" class="form-input" value="<?php echo $direccion;?>" pattern="([a-zA-Z0-9]| |/|\\|@|#|\$|%|&){5,40}" required/>
                </p>

                <p>
                    <label for="telefono">Teléfono: <span><em>(requerido)</em></span></label>
                    <input type="tel" id="phone" name="telefono" class="form-input" value="<?php echo $telefono;?>" required pattern="[0-9]{9}"/>
                </p>
                
               <center> <input class="form-btn" name="submit" type="submit" value="Modificar" /></center>
              </p>
            </form>
        </div>
        
      </div>
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>
