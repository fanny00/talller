<?php


$ultima_visita = date('Y d m  H:i:s', $_SESSION['instante']);

$rut = $_SESSION["rut"];

//echo "Fecha :". $ultima_visita;

$now = date('H:i:s');
/*echo "<br>";
echo $now;
echo "<br>";
echo $rut;*/

$info = php_uname();

//echo "<br> $info";

function getRealIP() {

  if (!empty($_SERVER['HTTP_CLIENT_IP']))
      return $_SERVER['HTTP_CLIENT_IP'];
     
  if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
      return $_SERVER['HTTP_X_FORWARDED_FOR'];
 
  return $_SERVER['REMOTE_ADDR'];
}

$ip_cliente = getRealIP();

//echo "<br> $ip_cliente";