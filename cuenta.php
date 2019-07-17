<?php 
/*
if(isset($_GET['i'])){
    session_start();
}*/
include 'includes/funciones/sessiones.php';
include 'includes/templates/header.php' ;

 /*var_dump($_SESSION);*/
?>


<section class="container mi-cuenta">
    <h1 class="titulo-principal text-left">Mi Cuenta</h1>
    <div class="row">
        <div class="col-md-6">
            <div class="grupo">
                <h3 class="text-uppercase">Información de contacto</h3>   

                <div class="datos-personales">
                    <p>Gabriel Martinez</p>
                    <p>soporte@digitalscrab.com</p>
                </div>
                <div class="botones">
                    <a href="" class="boton-link">Cambiar la contraseña</a>
                    <a href="" class="boton-link">Editar</a>
                </div>
            </div>
            <!-- .grupo -->
            <div class="grupo">
                <h3 class="text-uppercase">LIBRETA DE DIRECCIONES</h3>   
                <p>Dirección de facturación por defecto</p>
                <p>No ha establecido una dirección de facturación predeterminada.</p>
                <div class="botones">
                    <a href="" class="boton-link">Editar Dirección</a>
                    <a href="" class="boton-link">Gestionar direcciones</a>
                </div>
            </div>
            <!-- .grupo -->
        
        </div>
        <div class="col-md-6">
            <div class="grupo">
                <h3 class="text-uppercase">Boletines Informativos</h3>   

                <p>No está suscrito a nuestro boletín de noticias.</p>   
                <div class="botones">
                    <a href="" class="boton-link">Editar Dirección</a>
                </div>
            </div>
            <!-- .grupo -->
            <div class="grupo">
                <p>Dirección de envío predeterminada</p>   
                <p>No ha establecido una dirección de envío predeterminada.</p>
                <div class="botones">
                    <a href="" class="boton-link">Editar Dirección</a>
                </div>
            </div>
            <!-- .grupo -->
        </div>
    </div>
</section>












<?php include 'includes/templates/footer.php' ?>