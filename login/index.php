<?php
error_reporting(E_ALL);
include $_SERVER["DOCUMENT_ROOT"].'/fisio/conexion/conexion.php';
//añadido para evitar que la session no se abra
if(!isset($_SESSION))
{
    session_start();
}

$_SESSION["ultimoingreso"]=date("Y-n-j H:i:s");

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    //CIERRA IF POST----valida usuarios
    $user = htmlentities($_POST['User']);
    $pass = htmlentities($_POST['Password']);
    $candado = ' ';//busca en las variables si hay espacios, ayuda contra sql injection
    //Esta funcion busca caracteres
    $str_u = strpos($user,$candado);//usuario
    $str_p = strpos($pass,$candado);//password
    //si es entero
    if (is_int($str_u) || is_int($str_p)) {
        $user = '';
        $pass = '';
    }

    if (!isset($user) || !isset($pass) )
    {
        //echo "Credenciales incorrectas";
    }else{


        $query= "SELECT Adm, Serv, Pass, Correo FROM roles WHERE Adm = '".$user."' AND Pass = '".$pass."' ";
        $con = mysqli_query($mysqli, $query) or die('Error al buscar en la base de datos.');
        $row = mysqli_num_rows($con);
        //echo "<br>";
        $var = mysqli_fetch_assoc($con);
        //print_r($var);
    }
    if($row != 1  || $user != $var['Adm'] && $pass != $var['Pass'] )
    {
        echo "nombre o contraseña incorrectos";
    }

    $nick   = $var['Adm'];
    $contra = $var['Pass'];
    $serv = $var['Serv'];


    switch($serv)
    {
        case 'Adm':
            $_SESSION['Adm'] = $nick;
            $_SESSION['Serv']= $serv;
            $_SESSION['Pass']= $contra;

            /*echo $nick;
            echo $serv;
            echo $contra;
            echo "bienvenido administrador";*/
            header('Location: ../admin/index.php?nick=$nick');
            break;
        case 'gestor':
            $_SESSION['Adm'] = $nick;
            $_SESSION['Serv']= $serv;
            $_SESSION['Pass']= $contra;

            echo $nick;
            echo $serv;
            echo $contra;
            echo "bienvenido gestor";
            header('Location: ../gestor/index.php');
            break;
        case 'est':
            $_SESSION['Adm'] = $nick;
            $_SESSION['Serv']= $serv;
            $_SESSION['Pass']= $contra;
            $useree = $_SESSION['logged_in_user_name'] = $nick;

            echo $useree;
            echo $serv;
            echo $contra;
            echo "bienvenido estudiante";
            ?>

            <?php
            header('Location: ../estudent/index.php?nick=$nick');
            break;

        default:
            //echo "no tienes permiso de entrar";
            ?>
    <script>
    alert("No tienes permiso de entrar");
        location.href ="../index.php";
    </script>

        </script>
        <?php

    }
}
else{
    //echo "utiliza el formulario para continuar";
    ?>
        script>
        alert("utiliza el formulario para entrar");
        location.href ="../index.php";
</script>

</script>
        <?php
}
    
?>

