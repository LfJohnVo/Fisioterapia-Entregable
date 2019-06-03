<div class="login-container">
    <meta charset="utf-8">
    <link type="text/css" rel="stylesheet" href="css/materialize/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <section class="login" id="login">



        <center><h1><font color="#ffffff">Nutrición</font></h1></center>




        <form class="login-form" action="login/index.php" method="post">

            <h4><font color="#ffffff">Nombre de Usuario</font></h4>
            <input type="text" class="login-input" name="User" required autofocus/>
            <h4><font color="#ffffff">Contraseña</font></h4>
            <input type="password" class="login-input" name="Password" required/>
            <div class="submit-container">
                <button type="submit" class="login-button pulse" >Ingresar <i class="material-icons right">send</i></button>
            </div>
        </form>
    </section>
    <p><font color="#ffffff">2019 - Unitec Campus Sur</font></p>

</div>

<!--video de fondo ******modificar***** prueba 1
    <video loop muted autoplay src="login/fondo.mp4">
        <source src="video/big_buck_bunny.webm" type="video/webm">
        <source src="video/big_buck_bunny.mp4" type="video/mp4">
        <source src="video/big_buck_bunny.ogv" type="video/ogg">
    </video>
-->
<img src="uno.jpg" height="100%" width="100%">

<style>html {
        height: 100%;
    }

    body {
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        position: relative;
        min-height: 100%;
        background: rgba(26, 18, 18, 0.78);


    }


    img {

        position: fixed;
        min-width: 100%;
        min-height: 100%;
        top: 50%;
        left: 50%;
        transform: translateX(-50%) translateY(-50%);
        z-index: -100;


    }
    /*

    video {
    margin: 0;
    padding: 0;
    border: 0;
    font-size: 100%;
    font: inherit;
    vertical-align: baseline;
}
    --/*


/* Animation Keyframes */
    @keyframes scale_header {
        0%   {max-height: 0px; margin-bottom: 0px; opacity: 0;}
        100% {max-height: 117px; margin-bottom: 25px; opacity: 1;}
    }

    @keyframes input_opacity {
        0%   {transform: translateY(-10px); opacity: 0}
        100% {transform: translateY(0px); opacity: 1}
    }

    @keyframes text_opacity {
        0% {color: transparent;}
    }

    @keyframes error_before {
        0%   {height: 5px; background: rgba(0, 0, 0, 0.156); color: transparent;}
        10%  {height: 117px; background: #FFFFFF; color: #C62828}
        90%  {height: 117px; background: #FFFFFF; color: #C62828}
        100% {height: 5px; background: rgba(0, 0, 0, 0.156); color: transparent;}
    }



    /* Login Form */
    .login-container {
        display: flex;
        flex-direction: column;
        align-items: center;
        position: relative;
        width: 700px;
        height: auto;
        padding: 5px;
        box-sizing: border-box;

    }

    .login-container img {
        width: 200px;
        margin: 0 0 20px 0;
    }

    .login-container p {
        align-self: flex-start;
        font-family: 'Roboto', sans-serif;
        font-size: 0.8rem;
        color: rgba(0, 0, 0, 0.5);

    }

    .login-container p a {
        color: rgba(0, 0, 0, 0.4);
    }

    .login {
        position: relative;
        width: 100%;
        padding: 10px;
        margin: 0 0 30px 0;
        box-sizing: border-box;
        border-radius: 30px;
        background: rgba(0, 0, 0, 0.29);
        overflow: hidden;
        animation: input_opacity 0.2s cubic-bezier(.55, 0, .1, 1);
        box-shadow: 0 2px 2px 0 rgba(0, 0, 0, 0.14),
        0 1px 5px 0 rgba(0, 0, 0, 0.12),
        0 3px 1px -2px rgba(0, 0, 0, 0.2);
    }

    .login > header {
        position: relative;
        width: 100%;
        padding: 10px;
        margin: -10px -10px 25px -10px;
        border-bottom: 1px solid rgba(0, 0, 0, 0.1);
        background: #d66d05;
        font-family: 'Roboto', sans-serif;
        font-size: 1.3rem;
        color: #FAFAFA;
        animation: scale_header 0.6s cubic-bezier(.55, 0, .1, 1), text_opacity 1s cubic-bezier(.55, 0, .1, 1);
        box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.14),
        0px 1px 5px 0px rgba(0, 0, 0, 0.06),
        0px 3px 1px -2px rgba(0, 0, 0, 0.2);
    }

    .login > header:before {
        content: '';
        display: flex;
        justify-content: center;
        align-items: center;
        position: absolute;
        width: 100%;
        height: 55px;
        padding: 10px;
        margin: -10px 0 0 -10px;
        box-sizing: border-box;
        background: rgba(0, 0, 0, 0.156);
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        color: transparent;

        z-index: 5;
    }

    .login.error_1 > header:before,
    .login.error_2 > header:before {
        animation: error_before 3s cubic-bezier(.55, 0, .1, 1);
    }

    .login.error_1 > header:before {
        content: 'Invalid username or password!';
    }

    .login.error_2 > header:before {
        content: 'Invalid or expired Token!';
    }

    .login > header h2 {
        margin: 50px 0 10px 0;
    }

    .login > header h4 {
        font-size: 0.7em;
        animation: text_opacity 1.5s cubic-bezier(.55, 0, .1, 1);
        color: rgba(255, 255, 255, 0.4);
    }

    /* Form */
    .login-form {
        padding: 15px;
        box-sizing: border-box;
    }


    /* Inputs */
    .login-input {
        position: relative;
        width: 100%;
        padding: 10px 5px;
        margin: 0 0 25px 0;
        border: none;
        border-bottom: 2px solid rgba(0, 0, 0, 0.2);
        box-sizing: border-box;
        background: transparent;
        font-size: 1rem;
        font-family: 'Roboto', sans-serif;
        font-weight: 100;
        color: #FAFAFA;
        opacity: 1;
        animation: input_opacity 0.8s cubic-bezier(.55, 0, .1, 1);
        transition: border-bottom 0.2s cubic-bezier(.55, 0, .1, 1);
    }

    .login-input:focus {
        outline: none;
        border-bottom: 2px solid #E37F00;
    }


    /* Submit Button */
    .submit-container {
        display: flex;
        flex-direction: row;
        justify-content: flex-end;
        position: relative;
        padding: 10px;
        margin: 35px -25px -25px -25px;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
    }

    .login-buttons {
        padding: 30px;
        border: none;
        border-radius: 10px;

        background: #034da3;
        font-family: 'Roboto', sans-serif;
        font-size: 0.9rem;
        font-weight: 500;
        color: #ffffff;
        cursor: pointer;
        opacity: 1;
        animation: input_opacity 0.8s cubic-bezier(.55, 0, .1, 1);
        transition: background 0.2s ease-in-out;
    }

    .login-button.raised {
        padding: 5px 10px;
        color: #FAFAFA;
        background: #E37F00;
        box-shadow: 0px 2px 2px 0px rgba(0, 0, 0, 0.137255),
        0px 1px 5px 0px rgba(0, 0, 0, 0.117647),
        0px 3px 1px -2px rgba(0, 0, 0, 0.2);
    }

    .login-button:hover {
        background: rgba(0, 0, 0, 0.05);
    }

    .login-button.raised:hover {
        background: #FDAB43;
    }
</style>
<script type="text/javascript" src="css/materialize/js/materialize.min.js"></script>
<script>var form = document.getElementById('login');
    var buttonE1 = document.getElementById('e1');

    buttonE1.addEventListener('click', function () {
        form.classList.add('error_1');
        setTimeout(function () {
            form.classList.remove('error_1');
        }, 3000);
    });</script>