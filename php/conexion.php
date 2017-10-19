<?php
$host = "localhost";
$user = "root";
$password = "$7Yrd87eR";
$db = "system_encuestas";
$conexion = mysqli_connect($host, $user, $password) or die ("no Hay conexion a la base de datos");
mysqli_select_db($conexion, $db) or die ("No existe la base de datos");
 ?>
