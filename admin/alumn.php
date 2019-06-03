<?php
include 'header_admin.php';
include '../lib_comp/vendor/autoload.php';

ini_set('memory_limit', '-1');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Reader\Csv;
use PhpOffice\PhpSpreadsheet\Reader\Xlsx;
 
$file_mimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain', 'application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
 
if(isset($_FILES['file']['name']) && in_array($_FILES['file']['type'], $file_mimes)) {

    $arr_file = explode('.', $_FILES['file']['name']);
    $extension = end($arr_file);

    if ('csv' == $extension) {
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

        <table border="5">

            <?php

            //echo "<td>";
            $ciclo = $value[0];
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $nombre = $value[5];
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $esc = $value[2];
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $desc_esc = $value[3];
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $cuenta = $value[4];
            $cuenta1 = (int)$cuenta;
            //var_dump($cuenta1);
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $nombre2 = $value[5];
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $apellidoP = $value[6];
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $apellidoM = $value[7];
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $carrera = $value[8];
            //var_dump($carrera);
            if ($carrera == 1040){
                //echo "noveno";
                $grado = 9;
            }elseif ($carrera == 1240){
                //echo "cuarto";
                $grado = 4;
            }
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $desc_carr = $value[9];
            //echo "<br>";
            //echo "</td>";

            //echo "<td>";
            $sexo = $value[10];
            //echo "<br>";
            //echo "</td>";

            /*echo "<td>";
            echo $value[11]."<br>";
            echo "</td>";

            echo "<td>";
            echo $value[12]."<br>";
            echo "</td>";*/
            if ($value[0] == 'CICLO') {
                continue;
            }
            $insert_Contfact= "INSERT INTO alumno (No_cuenta, Nombre, Apellido_P, Apellido_M, Carrera, Sexo , Grado) VALUES
            ('".$cuenta."','".$nombre."','".$apellidoP."','".$apellidoM."','".$carrera."','".$sexo."' ,'".$grado."')";
            //echo $insert_Contfact;
            if (mysqli_query($mysqli, $insert_Contfact)){
                $insert_users = "INSERT INTO roles (Adm, Serv, Pass, Correo) VALUES
            ('".$cuenta."','est','".$cuenta."', NULL)";
                //echo "hecho";
                $valor = TRUE;
                if (mysqli_query($mysqli, $insert_users)) {
                $valor = TRUE;
                }
            }else{
                //print_r($mysqli->error_list);
                $valor = FALSE;
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
