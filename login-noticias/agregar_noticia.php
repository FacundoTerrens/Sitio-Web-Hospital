<?php
include 'conexion.php';

session_start();

$titulo = $_POST['titulo'];
$copete = $_POST['copete'];
$cuerpo = $_POST['cuerpo'];

$nombreimg=$_FILES['img']['name'];
$archivo = $_FILES['img']['tmp_name'];
$ruta = "images";

$ruta=$ruta."/".$nombreimg;

move_uploaded_file($archivo, $ruta);
$query = "INSERT INTO noticias VALUES ('','".$titulo."', '".$cuerpo."', '".$ruta."', '','".$copete."')";
$consulta = mysqli_query($conexion, $query);


if(!$resultado){
  echo "error al agregar";
}else {
  echo "se agrego";
}
echo $ruta;
echo "<br>";
echo $nombreimg;
exit();
header('location:estructura-noticia.php');
exit();
 ?>
