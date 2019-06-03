<?php include 'header_admin.php'; ?>

<div class="container">


    <div class="row" style="padding-left: 100px;">
        <div class="col s6 m6" style="padding-top: 10px;">
                    <div class="card">
                        <div class="card-image">
                            <form action="alumn.php" method="post" enctype="multipart/form-data">
                            <img src="img/alumnos.jpg">
                            <div class="btn">
                                <span>Archivos: </span>
                                <input type="file" name="file" accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required>
                            </div>
                                <button type="submit" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">file_upload</i></>
                        </div>
                        </form>
                        <div class="card-content">
                            <h5>Alumnos</h5>
                            <p>Pulse el boton para cargar su excel.</p>
                        </div>
                    </div>
            </div>

        <div class="col s6 m6" style="padding-top: 10px">
            <div class="card">
                <div class="card-image">
                    <form action="hospt.php" method="post" enctype="multipart/form-data">
                    <img src="img/hospital.jpg" style="width: 420px">
                    <div class="btn">
                        <span>Archivos: </span>
                        <input type="file" name="file" multiple accept="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet" required>
                    </div>
                        <button type="submit" class="btn-floating halfway-fab waves-effect waves-light red"><i class="material-icons">file_upload</i></>
                </div>
                </form>
                <div class="card-content">
                    <h5>Hospital</h5>
                    <p>Pulse el boton para cargar su excel.</p>
                </div>
            </div>
        </div>
    </div>






    </div><!--Termina contenedor-->