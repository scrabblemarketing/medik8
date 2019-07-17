<?php 
  session_start();
  if(isset($_GET['cerrar_sesion'])){
    $cerrar_sesion = $_GET['cerrar_sesion'];
      if($cerrar_sesion){
      session_destroy();//con esta funcion cierro la sesion
    }
  }
include 'includes/templates/header.php' ?>



<section class="login container">
    <?php if($_GET['accion'] == 'registro'): ?>
    <h1 class="titulo-principal text-left">Crear nueva cuenta de cliente</h1>
    <h3 class="mb-4">INFORMACIÓN PERSONAL</h3>
    <form class="form-login" method="post" action="login-model.php" id="form-registro">
        
        <div class="form-group">
            <label for="">Nombre *</label>
            <input name="nombre" type="text" class="form-control" id="#nombre"  autocomplete="off">
            <div class="error"></div>
        </div>
        <div class="form-group">
            <label for="">Apellidos *</label>
            <input name="apellido" type="text" class="form-control" id="#apellido" autocomplete="off">
            <div class="error"></div>
        </div>
        <div class="form-group">
            <label for="">
            <input name="boletin" type="checkbox" class="form-control"> Sucribirse al boletín</label>
            
        </div>
        <h4 class="log">Información de inicio de sesión</h4>

        <div class="form-group">
            <label for="">Correo electrónico *</label>
            <input name="correo" type="text" class="form-control" id="correo" autocomplete="off">
            <div class="error"></div>
        </div>
        <div class="form-group">
            <label for="">Contraseña *</label>
            <input name="password" type="password" class="form-control" id="password" placeholder="Password" autocomplete="off">
            <div class="error"></div>
            <div id="auxiliar">Fuerza de la contraseña: Sin contraseña</div>
        </div>
        <div class="form-group">
            <label for="">Confirmar contraseña *</label>
            <input name="" type="password" class="form-control" id="confirmar" placeholder="Confirmar contraseña" autocomplete="off">
            <div class="error"></div>
        </div>
        <div class="form-group">
            <input name="personalizacion"  type="checkbox" class="form-control" id="ac1">
            <label for="ac1" class="check"><span>Aceptar personalización en función del usuario</span></label>
            
        </div>
        <div class="form-group">
            <input name="datos" type="checkbox" class="form-control" id="ac2">
            <label for="ac2" class="check"><span> Aceptar trasmisión de datos a terceros </span></label>
            
        </div>
        <div class="form-group">
            <div class="row registro-botones">
                <div class="col-md-6">
                    <a href="index.php" class="boton-link">Volver</a>
                </div>
                <div class="col-md-6">
                    <input type="hidden" name="registro" value="crear">
                    <input type="submit" class="boton-link" value="Crear una cuenta" id="submit">
                </div>
            </div>
            
            
        </div>

    </form>
   

    <?php elseif($_GET['accion'] == 'inicio'): ?>
    <h1 class="titulo-principal text-left">Inicio de Sesión de cliente</h1>
    <p>CLIENTES REGISTRADOS</p>
    <form class="form-login" method="post" action="login-model.php">
        <p>Si tienes una cuenta, inicia sesión con tu dirección de correo electrónico.</p>
        <div class="form-group">
            <label for="">Direccion de email *</label>
            <input name="correo" type="text" class="form-control" autocomplete="off">
        </div>
        <div class="form-group">
            <label for="">Contraseña *</label>
            <input name="password" type="password" class="form-control" placeholder="Password" autocomplete="off">
        </div>
        <div class="form-group">
            <input type="hidden" name="registro" value="iniciar">
            <input type="submit" value="Iniciar Sesión" class="boton-link">
            <a href="">¿Olvidate tu contraseña?</a>
        </div>

    </form>
    <h4>Nuevos clientes</h4>
    <p>Cree su cuenta para poder comprar y obtener más beneficios: agilidad en la compra, podrá tener más de una dirección de entrega, hacer el seguimiento de sus compras, ¡y mucho más!</p>
    <a href="login.php?accion=registro" class="boton-link">CREAR UNA CUENTA</a>

    <?php endif ?>
</section>










<?php include 'includes/templates/footer.php' ?>