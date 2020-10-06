<?php
// Initialize the session
session_start();
/*require('sesion.php');*/
require('config.php');

$ultima_visita = date('Y d m  H:i:s', $_SESSION['instante']);
$now = date('H:i:s');

$rut = $_SESSION["rut"];

$info = php_uname();

function getRealIP() {

  if (!empty($_SERVER['HTTP_CLIENT_IP']))
      return $_SERVER['HTTP_CLIENT_IP'];
     
  if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
      return $_SERVER['HTTP_X_FORWARDED_FOR'];
 
  return $_SERVER['REMOTE_ADDR'];
}

$ip_cliente = getRealIP();



    $UpdCliente = "UPDATE cliente 
                    SET ultima_visita = '".$ultima_visita."', 
                    tiempo_visita = '".$now."',
                    info = '".$info."',
                    ip_cliente = '".$ip_cliente."'
                    WHERE Rut = '$rut'";

    if ($db_connection->query($UpdCliente) === TRUE) {
        echo "Datos ingresados correctamente"; 
    } else {
        echo "Error: " . $UpdCliente . "<br>" . $db_connection->error;
    }

// Unset all of the session variables
$_SESSION = array();


// Destroy the session.
session_destroy();


 
// Redirect to login page
header("location: login.php");
exit;
?>