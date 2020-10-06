<?php
session_start();
require('config.php');
require('sesion.php');
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");   
    exit;
}




?>
<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
   
    <link rel="stylesheet" href="css/styles.css">
    <script src="buscador.js"></script>

    <title>Ver Registros</title>
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
      <div class="mt-5">
        <?php include './buscador.php'; ?>
        </div>
      <table class="table mt-5">
                        <thead>
                          <tr>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido</th>
                            <th scope="col">Rut</th>
                            <th scope="col">Email</th>
                            <th scope="col">Dirección</th>
                            <th scope="col">Telefono</th>
                          </tr>
                        </thead>

               <?php
                $sql = "SELECT Rut, Nombre, Apellido, Email, Direccion, Telefono FROM cliente";
                $result = mysqli_query($db_connection, $sql);

                if ($result->num_rows > 0) {
                  // output data of each row
                  while($row = $result->fetch_assoc()) {
                    
                    ?>
                    <?php  
                      $nombre = $row["Nombre"];
                      $apellido = $row["Apellido"];
                      $rut = $row["Rut"];
                      $email = $row["Email"];
                      $direccion = $row["Direccion"];
                      $telefono = $row["Telefono"];
                    ?>
                   
                    <tr>
                     <td><?php echo utf8_encode($nombre) ?></td>
                     <td><?php echo utf8_encode($apellido) ?></td>
                     <td><?php echo $rut ?></td>
                     <td><?php echo $email ?></td>
                     <td><?php echo utf8_encode($direccion) ?></td>
                     <td><?php echo $telefono ?></td>
                     <?php
                    echo "<td> <a href='modificar.php?rut=$rut'><button type='button' class='btn btn-primary btn-sm'>Modificar</button></a> </td>" ;
                    
                    echo "<td> <a href='eliminar.php?rut=$rut'><button type='button' class='btn btn-danger btn-sm'>Eliminar</button></a></td>";
                     ?>
                  </tr>
                  

                <?php
                  }
                } else {
                    echo "0 results";
                }
                ?>
                        
                        
         </table>
     
      </div>

</body>