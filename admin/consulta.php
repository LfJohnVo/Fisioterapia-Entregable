<?php
include 'header_admin.php'; ?>

<div class="container" style="padding-top: 30px; padding-left: 100px;">
<div class="row">
 <div class="col s12 m12">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
        	<h5>Consulta</h5>
        <form action="cuen.php" method="post">
          <div class="input-field col s12">
          <i class="material-icons prefix">account_circle</i>
          <input type="number" name="noCuenta" id="noCuenta" autocomplete="off" required/>
          <label for="noCuenta">Numero de cuenta</label>
        </div>
        </div>
        <div class="card-action">
          <button class="btn waves-effect waves-light" type="submit" name="action">Realizar consulta
    <i class="material-icons right">send</i>
  </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!--
<div class="row">
 <div class="col s12 m12">
    <div class="card horizontal">
      <div class="card-stacked">
        <div class="card-content">
        	<h5>Registro</h5>
        <form action="reg.php" method="post">
          <div class="input-field col s4">
          <i class="material-icons prefix">account_circle</i>
          <input type="text" name="nombre" id="nombre" autocomplete="off" required/>
          <label for="noCuenta">Nombre</label>
        </div>
        <div class="input-field col s4">
          <input type="text" name="ap" id="ap" autocomplete="off" required/>
          <label for="noCuenta">Apellido paterno</label>
        </div>
        <div class="input-field col s4">
          <input type="text" name="am" id="am" autocomplete="off" required/>
          <label for="noCuenta">Apellido materno</label>
        </div>
        </div>
        <div class="card-action">
          <button class="btn waves-effect waves-light" type="submit" name="action">Registrar
    <i class="material-icons right">send</i>
  </button>
        </div>
        </form>
      </div>
    </div>
  </div>
</div>
-->
    <div class="row">
        <div class="col s12 m12">
            <div class="card horizontal">
                <div class="card-stacked">
                    <div class="card-content">
                        <h5>Modificacion y registro</h5>
                        <form action="mod_reg.php" method="post">
                            <div class="input-field col s4">
                                <i class="material-icons prefix">account_circle</i>
                                <input type="text" name="nombre" id="nombre" autocomplete="off" required/>
                                <label for="noCuenta">Nombre</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" name="ap" id="ap" autocomplete="off" required/>
                                <label for="noCuenta">Apellido paterno</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" name="am" id="am" autocomplete="off" required/>
                                <label for="noCuenta">Apellido materno</label>
                            </div>

                            <div class="input-field col s4">
                                <i class="material-icons prefix">vpn_key</i>
                                <input type="password" name="pass" id="pass" autocomplete="off" required/>
                                <label for="noCuenta">Contraseña</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="email" name="email" id="email" autocomplete="off" required/>
                                <label for="noCuenta">Correo</label>
                            </div>
                            <div class="input-field col s4">
                                <input type="text" name="lvl" id="lvl" autocomplete="off" placeholder="adm / est" required/>
                                <label for="noCuenta">Nivel de acceso</label>
                            </div>
                    </div>
                    <div class="card-action">
                        <button class="btn waves-effect waves-light" type="submit" name="action">Modificar
                            <i class="material-icons right">send</i>
                        </button>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



</div><!--Div del conteiner-->