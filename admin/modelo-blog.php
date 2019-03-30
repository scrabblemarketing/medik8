<?php
include_once('inc/funciones/funciones.php');

if($_POST['registro'] === 'nuevo'){

    $titulo = $_POST['titulo_blog'];
    $contenido = $_POST['contenido'];


    $directorio = '../img/blog/';//ruta de almacenamiento
    $directorio_muestra = '../img/muestra/';

    // Principal
    if(!is_dir($directorio)){
        mkdir($directorio, 0775, true);
    }

    if(move_uploaded_file($_FILES['imagen_principal']['tmp_name'], $directorio . $_FILES['imagen_principal']['name'])){
        $url_principal= $_FILES['imagen_principal']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }
    //Muestra
    if(!is_dir($directorio_muestra)){
        mkdir($directorio_muestra, 0775, true);
    }
    if(move_uploaded_file($_FILES['imagen_muestra']['tmp_name'], $directorio_muestra . $_FILES['imagen_muestra']['name'])){
        $url_muestra = $_FILES['imagen_muestra']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }
     


    //  die(json_encode($_FILES));
    
    try{
        if($_FILES['imagen_principal']['size'] > 0 && $_FILES['imagen_muestra']['size'] > 0){

            #con todo
           
            $stmt = $conn->prepare("INSERT INTO blogs (titulo_blog, contenido,url_imagen_principal, url_imagen_muestra, editado) VALUES (?,?,?,?,NOW())");
            $stmt->bind_param('ssss', $titulo, $contenido, $url_principal, $url_muestra);

        }else if($_FILES['imagen_principal']['size'] > 0){

            #con imagen principal

            $stmt = $conn->prepare("INSERT INTO blogs (titulo_blog, contenido,url_imagen_principal, editado) VALUES (?,?,?,NOW())");
            $stmt->bind_param('sss', $titulo, $contenido, $url_principal);

        }else if($_FILES['imagen_muestra']['size'] > 0){

            #con muestra

            $stmt = $conn->prepare("INSERT INTO blogs (titulo_blog, contenido, url_imagen_muestra, editado) VALUES (?,?,?,NOW())");
            $stmt->bind_param('sss', $titulo, $contenido, $url_muestra);

        }else{

            $stmt = $conn->prepare("INSERT INTO blogs (titulo_blog, contenido, editado) VALUES (?,?,NOW())");
            $stmt->bind_param('ss', $titulo, $contenido);

        }
        
        $stmt->execute();
        // die(json_encode($stmt->affected_rows ));
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Tratamiento agregado correctamente'
            );
        }else{
            $respuesta = array(
                'respuesta'=> 'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));


}

if($_POST['registro'] === 'actualizar'){

    $titulo = $_POST['titulo_blog'];
    $contenido = $_POST['contenido'];
    $id=$_POST['id'];


    $directorio = '../img/blog/';//ruta de almacenamiento
    $directorio_muestra = '../img/muestra/';

    // Principal
    if(!is_dir($directorio)){
        mkdir($directorio, 0775, true);
    }

    if(move_uploaded_file($_FILES['imagen_principal']['tmp_name'], $directorio . $_FILES['imagen_principal']['name'])){
        $url_principal= $_FILES['imagen_principal']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }
    //Muestra
    if(!is_dir($directorio_muestra)){
        mkdir($directorio_muestra, 0775, true);
    }
    if(move_uploaded_file($_FILES['imagen_muestra']['tmp_name'], $directorio_muestra . $_FILES['imagen_muestra']['name'])){
        $url_muestra = $_FILES['imagen_muestra']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }
     


    //  die(json_encode($_FILES));
    
    try{
        if($_FILES['imagen_principal']['size'] > 0 && $_FILES['imagen_muestra']['size'] > 0){

            #con todo
           
            $stmt = $conn->prepare("UPDATE blogs SET titulo_blog = ?, contenido = ?, url_imagen_principal = ?, url_imagen_muestra = ?, editado = NOW() WHERE id_blog = ?");
            $stmt->bind_param('ssssi', $titulo, $contenido, $url_principal, $url_muestra,$id);

        }else if($_FILES['imagen_principal']['size'] > 0){

            #con imagen principal

            $stmt = $conn->prepare("UPDATE blogs SET titulo_blog = ?, contenido = ?, url_imagen_principal = ?, editado = NOW() WHERE id_blog = ?");
            $stmt->bind_param('sssi', $titulo, $contenido, $url_principal,$id);

        }else if($_FILES['imagen_muestra']['size'] > 0){

            #con muestra

            $stmt = $conn->prepare("UPDATE blogs SET titulo_blog = ?, contenido = ?, url_imagen_muestra = ?, editado = NOW() WHERE id_blog = ?");
            $stmt->bind_param('sssi', $titulo, $contenido, $url_muestra, $id);

        }else{

            $stmt = $conn->prepare("UPDATE blogs SET titulo_blog = ?, contenido = ?, editado = NOW() WHERE id_blog = ?");
            $stmt->bind_param('ssi', $titulo, $contenido, $id);

        }
        
        $stmt->execute();
        // die(json_encode($stmt->affected_rows ));
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Tratamiento agregado correctamente'
            );
        }else{
            $respuesta = array(
                'respuesta'=> 'error'
            );
        }
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));


}

if($_POST['registro'] == 'eliminar'){

    $id=$_POST['id'];

    // die(json_encode($_POST));

    try{
        $stmt = $conn->prepare("DELETE FROM blogs WHERE id_blog = ?");
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