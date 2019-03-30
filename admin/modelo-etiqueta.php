<?php
include 'inc/funciones/funciones.php';

if($_POST['registro'] == 'nuevo'){
    $etiqueta = $_POST['etiqueta'];
    $contenido = $_POST['contenido'];
    if(empty($etiqueta)){
        die(json_encode($respuesta = array(
            'respuesta'=>'error'
        )));
    }

    try{
        $stmt = $conn->prepare("INSERT INTO etiquetas (etiqueta, contenido ,editado) VALUES (?,?,NOW())");
        $stmt->bind_param('ss',$etiqueta,$contenido);
        $stmt->execute();
        
        if($stmt->affected_rows>0){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_cat' => $stmt->insert_id,
            );
        }else{
            $respuesta = array(
                'respuesta'=>'error'
            );
        }
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));
}

//Actualizar
if($_POST['registro'] == 'actualizar'){

    // die(json_encode($_POST));
    $etiqueta = $_POST['etiqueta'];
    $id=$_POST['id'];
    $contenido = $_POST['contenido'];
    try{
        $stmt = $conn->prepare("UPDATE etiquetas SET etiqueta =? , contenido =?,editado=NOW() WHERE id_etiqueta= ?");
        $stmt->bind_param('ssi',$etiqueta, $contenido,$id);
        $stmt->execute();
        
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto'
            );
        }else{
            $respuesta = array(
                'respuesta'=>'error'
            );
        }
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));
}


//Eliminar
if($_POST['registro'] == 'eliminar'){

    $id=$_POST['id'];

    // die(json_encode($_POST));

    try{
        $stmt = $conn->prepare("DELETE FROM etiquetas WHERE id_etiqueta = ?");
        $stmt->bind_param("i",$id);
        $stmt->execute();
        
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_eliminado' => $id
            );
        }else{
            $respuesta = array(
                'respuesta'=>'error'
            );
        }
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));
}