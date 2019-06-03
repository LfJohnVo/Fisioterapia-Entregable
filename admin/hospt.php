<?php
include '../conexion/conexion.php';
//include 'header_admin.php';
include '../lib_comp/vendor/autoload.php';

ini_set('memory_limit', '-1');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;

$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');

if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

    $arr_file = explode('.', $_FILES['file']['name']);
    $extension = end($arr_file);

    if('csv' == $extension) {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Csv();
    } else {
        $reader = new \PhpOffice\PhpSpreadsheet\Reader\Xlsx();
    }

    $spreadsheet = $reader->load($_FILES['file']['tmp_name']);

    $sheetData = $spreadsheet->getActiveSheet()->toArray();
    //print_r($sheetData);
    foreach ($sheetData as $key => $value) {
        //for ($value = 1; $value = $sheetData; $++){
        ?>

        <table border="1">

        <?php

        //echo "<td>";
        $grado = $value[0];
        //echo $grado;
        //echo "</td>";

        //echo "<td>";
        $grupo = $value[1];
        //echo $grupo;
        //echo "</td>";

        //echo "<td>";
        $nomPrac = $value[2];
        //echo $nomPrac;
        //echo "</td>";

        //echo "<td>";
        $nomH = $value[4];
        //echo $nomH;
        //echo "</td>";

        //echo "<td>";
        $turno = $value[5];
        //echo $turno;
        //echo "</td>";

        //echo "<td>";
        $horario = $value[6];
        //echo $horario;
        //echo "</td>";

        //echo "<td>";
        $fecha1 = $value[8];
        //echo $fecha1;
        //echo "</td>";

        //echo "<td>";
        $fecha2 = $value[9];
        //echo $fecha2;
        //echo "</td>";

        //echo "<td>";
        $lugares = $value[10];
        //echo $lugares;
        //echo "</td>";

        //echo "<td>";
        $periodo = $value[7];
        //echo $periodo;
        //echo "</td>";

        //echo "<td>";
        $direccion = $value[11];
        //echo $direccion;
        //echo "</td>";

        if ($value[0] == 'Grado' || $value[0] == NULL){
            continue;
        }

        $insert_Contfact= "INSERT INTO hospitales (Grado, Grupo_H, Nombre_hospital , Turno, Horario, Fecha, Fecha2, Lugares, Direccion, Periodo) VALUES
        ('".$grado."','".$grupo."','".$nomH."','".$turno."','".$horario."','".$fecha1."' ,'".$fecha2."','".$lugares."','".$direccion."','".$periodo."')";
        echo $insert_Contfact;
        if (mysqli_query($mysqli, $insert_Contfact)){
            echo "hecho";
            $valor = TRUE;
        }else{
            print_r($mysqli->error_list);
            $valor = FALSE;
            var_dump($value[0]);
        }

    }//termina foreach

    if ($valor == TRUE){
        ?>
        <script>
            alert("Se cargo la información correctamente");
            location.href ="carga.php";
        </script>

    <?php
    }elseif($valor == FALSE){
    ?>
        <script>
            alert("Hubo un error al cargar la información");
            location.href ="carga.php";
        </script>
    <?php
    }else{
    ?>
        <script>
            alert("Hubo un error al cargar la información");
            location.href ="carga.php";
        </script>
        <?php
    }
    ?>



    </table>
    <?php
}

?>
