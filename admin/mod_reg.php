<?php
include '../conexion/conexion.php';
$nombre = $_POST['nombre'];
$ap = $_POST['ap'];
$am = $_POST['am'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$lvl = $_POST['lvl'];

$con = "SELECT No_cuenta FROM alumno WHERE Nombre = '".$nombre."' AND Apellido_P = '".$ap."' AND Apellido_M = '".$am."'";
$consulta = mysqli_query($mysqli, $con) or die('Error al buscar en la base de datos.');
$row =  mysqli_num_rows($consulta);

while ($f=mysqli_fetch_assoc($consulta)) {
    $cuenta = $f['No_cuenta'];
}

$up = "UPDATE roles SET Adm = '".$cuenta."' , Serv = '".$lvl."' , Pass = '".$pass."', Correo = '".$email."' WHERE Adm = '".$cuenta."'";
if(mysqli_query($mysqli, $up))
{
    $valor = TRUE;
}
else {
    $valor = FALSE;
}
?>
<?php
if ($valor == TRUE){
    ?>
    <script>
        alert("Se actualizo la información correctamente");
        location.href ="consulta.php";
    </script>

    <?php
}elseif($valor == FALSE){
    ?>
    <script>
        alert("Hubo un error al cargar la información");
        location.href ="consulta.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Hubo un error al cargar la información");
        location.href ="consulta.php";
    </script>
    <?php
}
?>