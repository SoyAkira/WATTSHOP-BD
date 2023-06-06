<?php
$dbHost = 'localhost';
$dbUser = 'root';
$dbPassword = '';
$dbName = 'wattpad';
//create connection and select DB
$con=mysqli_connect($dbHost, $dbUser, $dbPassword, $dbName);
$query = "SELECT `nombre`, `correo`, `contrasena`
FROM `wattpad` "; 
$res = mysqli_query($con,$query);

?>
<table>
    <tr> <th>Nombre</th> <th>Correo</th> <th>Contrasena</th> </tr>
    <?php
    while($row = mysqli_fetch_assoc($res)){
?>
<tr>
    <td> <?php echo $row['nombre']; ?></td> 
    <td><?php echo $row['correo']; ?></td> 
    <td><?php echo $row['contrasena']; ?></td> 
    </tr>
    <?php
   }