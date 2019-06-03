<?php include $_SERVER["DOCUMENT_ROOT"].'/fisio/estudent/header.php';

echo "<h4 style='padding-left: 300px;'>En esta pantalla solo se muestran los hospitales con disponibilidad</h4>";

$sel = "SELECT * FROM hospitales WHERE Lugares >= 1";
$consulta = mysqli_query($mysqli, $sel) or die('Error al buscar en la base de datos.');
$row =  mysqli_num_rows($consulta);
echo "<h5 style='padding-left: 300px;'>Hospitales disponibles: $row </h5>";
?>

<div class="row" style="padding-left: 220px;">
    <div class="col s12" >
        <div class="card hoverable">
            <div class="card-content">
                <span class="card-title">Resultados(<?php echo $row ?>)</span>
                <table class="centered">
                    <thead>
                    <tr class="cabecera">
                        <th>Hospital</th>
                        <th>Turno</th>
                        <th>Horario</th>
                        <th>Fecha inicio</th>
                        <th>Fecha final</th>
                        <th>Lugares</th>
                        <th>Dirección</th>
                        <th>Periodo</th>
                        <th>Elegir</th>
                    </tr>
                    </thead>
                    <?php

                    while ($f=mysqli_fetch_assoc($consulta)) { ?>
                        <tr>
                            <td><?php echo $f['Nombre_Hospital'] ?></td>
                            <td><?php echo $f['Turno'] ?></td>
                            <td><?php echo $f['Horario'] ?></td>
                            <td><?php echo $f['Fecha'] ?></td>
                            <td><?php echo $f['Fecha2'] ?></td>
                            <td><?php echo $f['Lugares'] ?></td>
                            <td><?php echo $f['Direccion'] ?></td>
                            <td><?php echo $f['Periodo'] ?></td>
                            <td><form action="registro.php" method="post">
                                <input type="text" name="cuenta" id="cuenta" placeholder="No. cuenta" autocomplete="off"/>
                                    <input type="hidden" name="">
                                    <button type="submit" >Enviar</button>
                                </form></td>
                        </tr>
                    <?php } ?>

                </table>
            </div>
            <div>
            </div>
        </div>
       <!-- <a href="consulta.php">Volver al menu anterior</a>-->
    </div>

