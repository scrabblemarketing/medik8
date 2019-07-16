<?php
include 'inc/funciones/funciones.php';

if($_POST['registro'] == 'nuevo'){
    $categoria = $_POST['categoria'];
    $contenido = $_POST['contenido'];


    try{
        $stmt = $conn->prepare("INSERT INTO categorias (categoria, texto_descripcion ,editado) VALUES (?,?,NOW())");
        $stmt->bind_param('ss',$categoria,$contenido);
        $stmt->execute();
        
        if($stmt->affected_rows>0){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_cat' => $stmt->insert_id,
                'titulo'=>$categoria
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
if($_POST['registro'] == 'actualizar'){
    $categoria = $_POST['categoria'];
    $id=$_POST['id'];
    $contenido = $_POST['contenido'];
    // die(json_encode($_POST));
    try{
        $stmt = $conn->prepare("UPDATE categoria SET categoria =? , texto_descripcion =? WHERE id_categoria= ?");
        $stmt->bind_param('ssi',$categoria, $contenido,$id);
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

if($_POST['registro'] == 'eliminar'){

    $id=$_POST['id'];

    // die(json_encode($_POST));

    try{
        $stmt = $conn->prepare("DELETE FROM categorias WHERE id_categoria = ?");
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