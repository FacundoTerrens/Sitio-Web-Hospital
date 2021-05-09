 <?php
 require 'conexion.php';

session_start();

$user = $_POST['user'];
$pass = $_POST['pass'];

$query = "SELECT COUNT(*) as contar FROM `usuarios` WHERE `user` = '$user' AND `pass` = '$pass'";


$consulta = mysqli_query($conexion, $query); 

$array = mysqli_fetch_array($consulta);

header("location: estructura-noticia.php");

  ?>
