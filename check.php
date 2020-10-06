<?php 
require('config.php');
if (isset($_POST)) {
    $subs_rut = $_POST['rut'];
    $subs_name = utf8_decode($_POST['nombre']);
    $subs_pass = $_POST['pass'];

     // Validate password
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
            
            $sql = "INSERT INTO probando(rut, nombre, password) VALUES ( '$subs_rut', '$subs_name', '$subs_password')";
    
            if ($db_connection->query($sql) === TRUE) {
                echo "Datos ingresados correctamente";
              } else {
                echo "Error: " . $sql . "<br>" . $db_connection->error;
              }
        }
    }

   
    
   
}