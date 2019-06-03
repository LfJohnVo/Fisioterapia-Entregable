<?php include 'header_admin.php';

$cuent = $_POST['noCuenta'];
$sel = "SELECT * FROM alumno WHERE No_cuenta = '$cuent'";
$consulta = mysqli_query($mysqli, $sel) or die('Error al buscar en la base de datos.');
$row =  mysqli_num_rows($consulta);
?>

<div class="row" style="padding-left: 220px;">
    <div class="col s12" >
        <div class="card hoverable">
            <div class="card-content">
                <span class="card-title">Resultados(<?php echo $row ?>)</span>
                <table class="centered">
                    <thead>
                    <tr class="cabecera">
                        <th>No. cuenta</th>
                        <th>Nombre</th>
                        <th>Apellido P</th>
                        <th>Apellido M</th>
                        <th>Carrera</th>
                        <th>Sexo</th>
                        <th>Grado</th>
                    </tr>
                    <tr>

                    </tr>
                    </thead>
                    <?php

                    while ($f=mysqli_fetch_assoc($consulta)) { ?>
                        <tr>
                            <td><?php echo $f['No_cuenta'] ?></td>
                            <td><?php echo $f['Nombre'] ?></td>
                            <td><?php echo $f['Apellido_P'] ?></td>
                            <td><?php echo $f['Apellido_M'] ?></td>
                            <td><?php echo $f['Carrera'] ?></td>
                            <td><?php echo $f['Sexo'] ?></td>
                            <td><?php echo $f['Grado'] ?></td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
            <div>
            </div>
        </div>
        <a href="consulta.php">Volver al menu anterior</a>
    </div>

