<?php
if(!empty($_GET["nombre"])){

    $Nom = $_GET["nombre"];
    $Correo = $_GET["correo"];
    $Contra = $_GET["contrasena"];
    
    //Datos Conexion
    $dbHost     = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbname     = 'wattpad';
    
    $db = new mysqli ($dbHost, $dbUsername, $dbPassword, $dbname);
    $db -> set_charset('utf8');

      //Check connection
      if($db->connect_error){
        die("Connection failed:". $db->connect_error);
    }else{
        echo "<h1>Eliminado</h1>";    
}

        //Update content into database
        $insert = $db->query(" DELETE FROM `wattpad` WHERE `nombre` LIKE '%$Nom%'   ");

        if($insert){
            echo "Usuario Eliminado";
        } else {
            echo "error";
        }
    
        
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="Style4.css">
</head>
<body>
    <main>
        <header>
            <div>
                <h2>Eliminar Registros</h2>
              </div>
        </header>
        <nav></nav>

        <section>
            <article>

                <form action="eliminar.php" method="get">
                    <table>
                        <tr><td>
                        <tr><td>Nombre:</td><td><input type="text" name="nombre"></td></tr>
                        <tr><td>Correo:</td><td><input type="text" name="correo"></td></tr>
                        <tr><td>Contrasena:</td><td><input type="text" name="contrasena"></td></tr>
                        <tr><td></td><td><input type="submit"></td></tr>
                    </table>
                </form>
            </article>
        </section>

        <aside></aside>
        <footer></footer>

    </main>
</body>
</html>
<?php