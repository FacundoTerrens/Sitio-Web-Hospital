<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalabre=no, initial-sacale=1.0, maximun-scale=1.0, minimun-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Oswald&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/105efd8435.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href=" <?php RUTA; ?>css/estilos.css">
    <title> Blog </title>
  </head>
  <body>

    <header>
      <div class="contenedor">
        <div class="logo izquierda">
          <p><a href="<?php echo RUTA; ?>">Mi primer blog</a></p>
        </div>
        <div class="derecha">
          <form name="busqueda" class="buscar"action="<?php echo RUTA; ?>/buscar.php" method="get">
              <input type="text" name="busqueda" placeholder="Buscar">
              <button type="submit" class="icono fas fa-search"></button>
          </form>
          <nav class="menu">
<ul>
  <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li>
  <li>  <a href="#"> <i class="fab fa-facebook-f"></i></a> </li>
  <li>  <a href="#"> Contacto <i class="icono fas fa-envelope"></i></a> </li>
</ul>
          </nav>
        </div>
      </div>
    </header>
