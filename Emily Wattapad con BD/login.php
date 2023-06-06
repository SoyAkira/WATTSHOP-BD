<?php


$Nom = $_GET['nombre'];
$Correo = $_GET['correo'];
$Contra = $_GET['contrasena'];

  //datos conexion
  $dbHost = 'localhost';
  $dbusername = 'root';
  $dbPassword = '';
  $dbName = 'wattpad';

  $db= new mysqli ('localhost', 'root' ,  '' , 'wattpad');
  $db -> set_charset('utf8');

  // check connection
  if($db->connect_error){
    die("connection failed:".$db->connec_error);
  }else{
    echo "<h1>Conectado</h1>";
  }
 
//Insert content into database
$insert = $db->query("INSERT into wattpad (nombre,correo,contrasena)
VALUES ('$Nom','$Correo','$Contra')");

if($insert){
     echo "Usuario Agregado";
}else{
   echo "Error";
}