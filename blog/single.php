<?php

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
$id_articulo = id_articulo($_GET['id']); 


if (!$conexion) {
  header ('Location: error.php');
}

if (empty($id_articulo)) {
header ('Location: index.php'); //en la funcion de id_articulo ponemos que solo se puede poner numero, por eso, si ahora ponemos texto lo toma como vacio y si esta vacio te lleva al index
}

$post = obtener_post_por_id($conexion, $id_articulo);
if (!$post) {
header ('Location: index.php'); //si no hay post anda a index.php
}
$post = $post[0];


require 'views/single.view.php';
 ?>
