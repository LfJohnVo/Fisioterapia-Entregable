<?php @session_start();//incluyendo la conexion para sesion
if (isset($_SESSION['nick'])) {
   // header('location: inicio');
    //cuando se ingresa del login se general las variables de sesion desde el login, aqui si existe se redirecciona a inicio
}

?>
  <meta charset="UTF-8">
  <title>Iniciar Sesion</title>
  <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Arimo' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Hind:300' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
  
  
      <link rel="stylesheet" href="login/css/style.css">

  


  <div id="login-button">
  <img src="https://pngimage.net/wp-content/uploads/2018/06/logo-de-unitec-png-7.png">
  </img>
</div>
<div id="container">
  <h1>Iniciar Sesion</h1>
    
  <span class="close-btn">
    <img src="https://cdn4.iconfinder.com/data/icons/miu/22/circle_close_delete_-128.png"></img>
  </span>

  <form class="login-form" action="login/index.php" method="post">

            <!--<h4><font color="#ffffff">Nombre de Usuario</font></h4>-->
            <input type="text" class="login-input" name="User" placeholder="Nombre de Usuario" required autofocus/>
            <!--<h4><font color="#ffffff">Contraseña</font></h4>-->
            <input type="password" class="login-input" name="Password" placeholder="Contraseña" required/>
            <div class="submit-container">
                <button type="submit" class="login-button pulse" >Ingresar</button>
            </div>
        </form>
</div>


  <script src='http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js'></script>
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

  

    <script  src="login/js/index.js"></script>




