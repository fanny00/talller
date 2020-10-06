<?php
require('config.php');

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
      $subs_pass = $_POST['pass'];
     

      if(empty(trim($_POST["pass"]))){
        echo "Por favor ingresa una contraseña.";     
      } elseif(strlen(trim($_POST["pass"])) < 8){
          echo "La contraseña al menos debe tener 8 caracteres.";
      } else{
          $password = trim($_POST["pass"]);
          $subs_password = password_hash($password, PASSWORD_DEFAULT);

          $result = $db_connection->query(
              "SELECT rut FROM `probando` WHERE rut = '$subs_rut'"
          );
    
    
        var_dump($subs_pass);
        
        if ($result->num_rows > 0) {
            echo '<div class="alert alert-danger"><strong>Oh no!</strong> El rut ya se encuentra registrado.</div>';
        } else {
            
          if (!empty($subs_rut) && !empty($subs_name) && !empty($subs_last) && !empty($subs_email) && !empty($subs_direccion) && !empty($subs_telefono) && !empty($subs_telefono) && !empty($subs_password)){
            $sql = "INSERT INTO cliente(Rut, Nombre, Apellido, Email, Direccion, Telefono, password) VALUES ( '$subs_rut', '$subs_name', '$subs_last', '$subs_email', '$subs_direccion', '$subs_telefono', '$subs_password')";
            $result = $db_connection->query(
              "SELECT rut FROM `probando` WHERE rut = '$subs_rut'"
             );

                  if ($db_connection->query($sql) === TRUE) {
                    echo "Datos ingresados correctamente";
                    header("Location: mostrar.php");
                  } else {
                    echo "Error: " . $sql . "<br>" . $db_connection->error;
                  }
    
          } else {
            echo 'Los campos no pueden estar vacios. Rellénalos para insertar en la base de datos'; // Si los valores recibidos por post estan vacios no inserta el registro y muestra este mensaje
          }
        }
    }



      

   }

}

  $db_connection->close();

		
?>