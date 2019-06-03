<?php
include "../conexion/conexion.php";
if (!isset($_SESSION['Adm'])) {
header('location: ../');
//cuando se ingresa del login se general las variables de sesion desde el login, aqui si existe se redirecciona a inicio
}
?>
<!DOCTYPE HTML>
<html>
<HEAD>
  <meta charset="utf-8">
  <meta name="author" author="Ing. Luis Fernando Jonathan Vargas Osornio - vojohn95@gmail.com">
    <meta name="author" author="Ing. Leonardo Hernandez">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link rel="stylesheet" href="../css/style.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
<script src="../js/jquery.js"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</HEAD>
<nav class="navbar-material #ffa726 orange lighten-1">
  <div class="nav-wrapper">
    <a href="#!" class="brand-logo">
      <img src="logo.png">
    </a>
    <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>

    <ul class="right hide-on-med-and-down">
      <li><a href="sass.html">Sass</a>

      </li>
      <li><a href="badges.html">Components</a>

      </li>
      <li><a href="collapsible.html">Javascript</a>

      </li>
      <li><a href="mobile.html">Mobile</a>

      </li>
    </ul>
    <ul class="side-nav" id="mobile-demo">
      <li><a href="sass.html">Sass</a>

      </li>
      <li><a href="badges.html">Components</a>

      </li>
      <li><a href="collapsible.html">Javascript</a>

      </li>
      <li><a href="mobile.html">Mobile</a>

      </li>
    </ul>
  </div>
</nav>
<script>$(".button-collapse").sideNav();</script>
