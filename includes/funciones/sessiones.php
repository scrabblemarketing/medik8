<?php 

function usuario_autenticado(){
	if(!revisar_usuario()){
		header('Location:login.php?accion=inicio');
		exit();
	}
}

function revisar_usuario(){
    if(isset($_SESSION['usuario'])){
        if($_SESSION['usuario']== 'tester'){
            return false;
        }else{
            return true;
        }
    }else{
        return false;
    }
	
}

session_start();
usuario_autenticado();