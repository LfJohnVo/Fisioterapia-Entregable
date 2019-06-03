<?php
include $_SERVER["DOCUMENT_ROOT"].'/fisio/conexion/conexion.php';
$nocuen =  $_POST['No_cuenta'];
$grado = $_POST['grado'];
$prom = $_POST['promedio'];

$del = "UPDATE alumno SET Grado= '".$grado."' , Promedio = '".$prom."' WHERE No_cuenta = ".$nocuen;

if(mysqli_query($mysqli, $del))
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
        alert("Se cargo la información correctamente");
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
    </table>

