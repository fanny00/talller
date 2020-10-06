<?php

$db_host="localhost";
$db_user="admin";
$db_password="h5CU<q6UndRz#r]<";
$db_name="taller_software";

// Create connection
$db_connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
// Check connection
if ($db_connection->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['submit'])){
  //validar si valores se reciben antes de hacer insert
  if($_POST['rut'] == ''){
   $error1 = '<span class="error">Por favor ingrese su rut</span>';
  } else if($_POST['nombre'] == ''){
   $error2 = '<span class="error">Por favor ingrese su nombre</span>';
  } else if($_POST['apellido'] == ''){
   $error3 = '<span class="error">Por favor ingrese su apellido</span>';
  } else if($_POST['email'] == '' or ! preg_match("/^[a-zA-Z0-9_\.\-]+@[a-zA-Z0-9\-]+\.[a-zA-Z0-9\-\.]+$/", $_POST['email'])){
   $error4 = '<span class="error">Por favor ingrese su email</span>';
  } else if($_POST['direccion'] == ''){
   $error5 = '<span class="error">Por favor ingrese su direccion</span>';
  } else if($_POST['telefono'] == ''){
   $error5 = '<span class="error">Por favor ingrese su teléfono</span>';
  } else {
     $subs_rut = utf8_decode($_POST['rut']);
     $subs_name = utf8_decode($_POST['nombre']);
     $subs_last = utf8_decode($_POST['apellido']);
     $subs_email = utf8_decode($_POST['email']);
     $subs_direccion = utf8_decode($_POST['direccion']);
     $subs_telefono = utf8_decode($_POST['telefono']);

     if (!empty($subs_rut) && !empty($subs_name) && !empty($subs_last) && !empty($subs_email) && !empty($subs_direccion) && !empty($subs_telefono)){
          $UpdCliente = "UPDATE cliente 
          SET Rut = '".$subs_rut."', 
              Nombre = '".$subs_name."', 
              Apellido = '".$subs_last."', 
              Email = '".$subs_email."', 
              Direccion = '".$subs_direccion."', 
              Telefono = '".$subs_telefono."'
              WHERE Rut = '$subs_rut'";

          if ($db_connection->query($UpdCliente) === TRUE) {
          echo "Datos ingresados correctamente";
          header("Location: mostrar.php");
          } else {
          echo "Error: " . $UpdCliente . "<br>" . $db_connection->error;
          }

     } else {
       echo 'Los campos no pueden estar vacios. Rellénalos para insertar en la base de datos'; // Si los valores recibidos por post estan vacios no inserta el registro y muestra este mensaje
     }

  }

}





  
  $db_connection->close();

            
 ?>