<?php
// Initialize the session
session_start();
require('config.php');
require('sesion.php');
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");   
    exit;
}



?>
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    

    <!--css-->
    <link rel="stylesheet" href="css/styles.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
        
    </style>
</head>
<body>
<div class="container">
        <div class="page-header">
            <p>Usuario Conectado <b><?php echo htmlspecialchars($_SESSION["rut"]); ?></b>

        </div>
        <p>
            <a href="reset-password.php" class="btn btn-warning">Cambia tu contraseña</a>
            <a href="logout.php" class="btn btn-danger">Cierra la sesión</a>
            
        </p>

        <?php include './nav.php'; ?>


<h1>Ayuda</h1>
<div id="accordion">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0">
        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
        Registrar Cliente
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body">
      Para registrar a un cliente debe llenar los campos que aparecen en el link "Regitrar Clientes". Todos los campos Son Requeridos.<br>
      La contraseña debe tener 8 caracteres alfa numeros, mayusculas y minusculas.
      Con los datos del rut con el formato 11111111-1 puede ingresar al sistema y logearse al ingresar al sitio, junto con la contraseña que escribio. 
      
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingTwo">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
        Ver Registro
        </button>
      </h5>
    </div>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
      <div class="card-body">
        Para ver el registro de los clientes que estan inscritos debe ir al links "Ver registros" en el menu de navegación en el cual podrá modificar y eliminar usuarios.
      </div>
    </div>
  </div>
  <div class="card">
    <div class="card-header" id="headingThree">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
        Modificar Cliente
        </button>
      </h5>
    </div>
    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
      <div class="card-body">
       El link para modificar un cliente en particulas se encuentra en "Ver Registros" al hacer click en Modificar, que es un boton de color azul, lo redirigirá a un formulario donde puede modificar los campos que ahí se muestran
    </div>
  </div>
</div>
<div class="card">
    <div class="card-header" id="headingFour">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
        Eliminar Cliente
        </button>
      </h5>
    </div>
    <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
      <div class="card-body">
        Para eliminar cliente dirigase al menu de navegación "Ver Registros" y presione el boton rojo, junto al cliente que desea eliminar
      </div>
    </div>
  </div>


<div class="card">
    <div class="card-header" id="headingFive">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
        Cambiar Contraseña
        </button>
      </h5>
    </div>
    <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
      <div class="card-body">
        Para cambiar Contraseña apriete el boton amarillo que lo redirigirá a un formulario donde debe ingresar su nueva contraseña. Se recomienda realizar esta accion mensualmente a mas tardar a cada 3 meses.
      </div>
    </div>
  </div>


<div class="card">
    <div class="card-header" id="headingSix">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
        Realizar un respaldo de la Base de Datos
        </button>
      </h5>
    </div>
    <div id="collapseSix" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
        Para realizar un respaldo de la base de datos debe clickear en el menu de navegación donde dice "REalizar un respaldo de la base de datos" esto generará una copia de la base de datos en la carpeta "archivos-backup" a la cual el administrador tiene acceso
      </div>
    </div>
  </div>


<div class="card">
    <div class="card-header" id="headingSeven">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
          Restaurar Base de Datos
        </button>
      </h5>
    </div>
    <div id="collapseSeven" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
        Para restaurar la Base de datos tiene que hacer click en Restaurar Base de datos debe hacer click en "Restaurar BD en el menu de navegación"
      </div>
    </div>
  </div>


<div class="card">
    <div class="card-header" id="headingEight">
      <h5 class="mb-0">
        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
         Bitacora
        </button>
      </h5>
    </div>
    <div id="collapseEight" class="collapse" aria-labelledby="headingSix" data-parent="#accordion">
      <div class="card-body">
        Para ir a la bitacora de los usuarios o clientes debe hacer click en el menu de navegación "Bitacora"
        En el cual puede encontrar una lista de actividades realizada por los diferentes usuarios he información sobre los equipos que ocuparon y su Ip.
      </div>
    </div>
  </div>

</div>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>