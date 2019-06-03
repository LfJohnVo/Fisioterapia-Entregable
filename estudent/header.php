<?php
include "../conexion/conexion.php";
if (!isset($_SESSION['Adm'])) {
    //header('location: ../');
//cuando se ingresa del login se general las variables de sesion desde el login, aqui si existe se redirecciona a inicio
}
?>
<!DOCTYPE HTML>
<html>
<HEAD>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
    <script src="../js/jquery.js"></script>
    <title>Nutricion</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

</HEAD>
<nav >
    <div class="nav-wrapper white"  style="box-shadow: 1px 1px 1px blue; padding-left: 300px;">
        <a href="#" class="brand-logo" >
            <!--<img src="img/logo.png" style="width:200px; padding-left: 30px">-->
        </a>
        <a data-activates="mobile-demo" class="button-collapse" style="color: black"><i class="material-icons">menu</i></a>

        <ul class="sidenav sidenav-fixed" style="width: 220px;">
            <li href="../menu/oce.php" ><a style="background-color: white; height: 64px; box-shadow: 1px 1px 1px blue;"><img src="img/logo.png" style="width:150%; padding-right: 30px;"></a></li>
            <li style="padding-top: 30px;"><a href="index.php" align="center"><i class="material-icons">home</i>Inicio</a></li>
            <li><div class="divider"></div></li>
            <li style="padding-top: 30px;"><a href="serv.php" align="center"><i class="material-icons">assignment_ind</i>Registrar</a></li>
            <li><div class="divider"></div></li>
            <li style="padding-top: 30px;"><a href="../login/salir.php" align="center"><i class="material-icons">close</i>Salir</a></li>
            <li><div class="divider"></div></li>
            <?php
            while ($f=mysqli_fetch_assoc($consulta)) {
            ?>
            <!--<li style="color: black; padding-right: 30px" <a>Bienvenido</a></li>
            <li style="color: black;"><a href="javascript:window.history.go(-1);" style="color: black;"><i class="material-icons right">undo</i></a></li>
            <li style="color: black;"><a href="../login/salir.php" style="color: black;"><i class="material-icons right">highlight_off</i>Cerrar sesion</a></li>-->


        </ul>
        <ul class="side-nav" id="mobile-demo">
            <li><div class="user-view">
                    <div class="background">
                        <img src="../header/img/background.jpg" style="width:115%; height:10%">
                    </div>
                    <i class="material-icons" style="color: black">account_circle</i>
                    <span class="white-text name" style="color: black"><?php //echo $f['Adm'] ?></span>
                    <br>
                    <span class="white-text email" style="color: black"><?php //echo $f['Correo'] ?></span>
                </div></li>
            <li><a>Registro</a></li>
        </ul>
        <?php } ?>
    </div>
</nav>



<script>$(".button-collapse").sideNav();</script>
<body style="background-color:#eae2ef; ">