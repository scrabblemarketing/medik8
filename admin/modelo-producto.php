<?php
include_once('inc/funciones/funciones.php');
function arregloURL($arreglo){
    $json = array();
    foreach ($arreglo as $key) {
        if($key !== ''){
            $json[] = $key;
        }
    }
    return json_encode($json);
}

if($_POST['registro'] === 'nuevo'){

    $beneficios = $_POST['beneficios'];
    $categoria = $_POST['categoria'];
    $frase = $_POST['contenido'];
    $definicion_corta = $_POST['contenido_corto'];
    $definicion_larga = $_POST['contenido_principal'];
    $ingrediente = $_POST['ingredientes'];
    $titulo = $_POST['titulo_producto'];
    $modo_uso = $_POST['modo_uso'];
    $precio= $_POST['precio'];
    $puntos = $_POST['puntos'];
    $tipo = $_POST['tipo'];
    $texto_barra = $_POST['texto_barra'];
    $img_producto = $_FILES['archivo_producto'];
    $img_barra = $_FILES['archivo_barra'];
    $texto_final = $_POST['texto_final'];
    // $texto_final = '';

/*

    $respuesta = array(
        'post'=>$_POST,
        'archivos'=>$_FILES
    );
    die(json_encode($respuesta));
   */

    $directorio = '../img/productos/';//ruta de almacenamiento

    // Principal
    if(!is_dir($directorio)){
        mkdir($directorio, 0775, true);
    }

    
    for($i = 0; $i < count($img_producto); $i++){
        if(move_uploaded_file($img_producto['tmp_name'][$i], $directorio . $img_producto['name'][$i])){
            $url_principal[]= $img_producto['name'];
        }else{
            $respuesta = array(
                'respuesta'=>error_get_last()
            );
        }
            
}

    $url_principal = arregloURL($url_principal[0]);
    // die(json_encode($url_principal));
    //barra
    if(move_uploaded_file($img_barra['tmp_name'], $directorio . $img_barra['name'])){
        $url_barra = $img_barra['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }

    $seleccion = arregloURL($puntos);

    // die(json_encode($respuesta));
  
    try{
        /*
        if($_FILES['archivo_producto']['size'] > 0 && $_FILES['caso']['size'] >0 && $_FILES['muestra']['size'] > 0){

            #con todo
           
            $stmt = $conn->prepare("INSERT INTO productos (titulo_producto, frase_producto,id_cat, precio, texto_descripcion, texto_principal, beneficios, ingredientes, modo_uso, url_imagenes, url_barra,seleccion,texto_final,editado) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())");
            $stmt->bind_param('ssisssssssssss', $nombre, $frase_producto, $url_principal, $url_muestra,$caso_url, $categoria);

        }else if($_FILES['archivo_producto']['size'] > 0 && $_FILES['muestra']['size'] > 0){

            #con imagen principal y muestra

            $stmt = $conn->prepare("INSERT INTO productos (titulo_producto, frase_producto,url_imagen_principal, url_imagen_secundario, editado, categoria) VALUES (?,?,?,?,NOW(),?)");
            $stmt->bind_param('ssssi', $nombre, $frase_producto, $url_principal, $url_muestra, $categoria);

        }else if($_FILES['muestra']['size'] > 0 && $_FILES['caso']['size'] > 0){
            
            #con muestra y caso

            $stmt = $conn->prepare("INSERT INTO productos (titulo_producto, frase_producto, url_imagen_secundario, url_caso, editado, categoria) VALUES (?,?,?,?,NOW(),?)");
            $stmt->bind_param('ssssi', $nombre, $frase_producto, $url_muestra,$caso_url, $categoria);

        }else if($_FILES['archivo_producto']['size'] > 0 && $_FILES['caso']['size'] > 0){
            
            #con principal y caso

            $stmt = $conn->prepare("INSERT INTO productos (titulo_producto, frase_producto,url_imagen_principal, url_caso, editado, categoria) VALUES (?,?,?,?,NOW(),?)");
            $stmt->bind_param('ssssi', $nombre, $frase_producto, $url_principal,$caso_url, $categoria);

        }else if($_FILES['archivo_producto']['size'] > 0){

            #con imagen principal

            $stmt = $conn->prepare("INSERT INTO productos (titulo_producto, frase_producto,url_imagen_principal, editado, categoria) VALUES (?,?,?,NOW(),?)");
            $stmt->bind_param('sssi', $nombre, $frase_producto, $url_principal, $categoria);

        }else if($_FILES['muestra']['size'] > 0){

            #con muestra

            $stmt = $conn->prepare("INSERT INTO productos (titulo_producto, frase_producto, url_imagen_secundario, editado, categoria) VALUES (?,?,?,NOW(),?)");
            $stmt->bind_param('sssi', $nombre, $frase_producto, $url_muestra, $categoria);

        }else if($caso_url > 0){

            #con caso

            $stmt = $conn->prepare("INSERT INTO productos (titulo_producto, frase_producto, url_caso, editado, categoria) VALUES (?,?,?,NOW(),?)");
            $stmt->bind_param('sssi', $nombre, $frase_producto, $caso_url, $categoria);

        }else{

            $stmt = $conn->prepare("INSERT INTO productos (titulo_producto, frase_producto, editado, categoria) VALUES (?,?,NOW(),?)");
            $stmt->bind_param('ssi', $nombre, $frase_producto, $categoria);

        }*/
        $stmt = $conn->prepare("INSERT INTO productos (titulo_producto, frase_producto,id_cat, precio, texto_descripcion, texto_principal, beneficios, ingredientes, modo_uso, url_imagenes, texto_barra,url_barra,seleccion,texto_final,editado) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,NOW())");
        $stmt->bind_param('ssisssssssssss', $titulo,$frase,$categoria,$precio,$definicion_corta,$definicion_larga,$beneficios,$ingrediente,$modo_uso,$url_principal,$texto_barra,$url_barra,$seleccion, $texto_final);
    
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


//ACTUALIZAR

if($_POST['registro'] === 'actualizar'){

    $beneficios = $_POST['beneficios'];
    $categoria = $_POST['categoria'];
    $frase = $_POST['contenido'];
    $definicion_corta = $_POST['contenido_corto'];
    $definicion_larga = $_POST['contenido_principal'];
    $ingrediente = $_POST['ingredientes'];
    $titulo = $_POST['titulo_producto'];
    $modo_uso = $_POST['modo_uso'];
    $precio= $_POST['precio'];
    $puntos = $_POST['puntos'];
    $tipo = $_POST['tipo'];
    $texto_barra = $_POST['texto_barra'];
    $img_producto = $_FILES['archivo_producto'];
    $img_barra = $_FILES['archivo_barra'];
    $texto_final = $_POST['texto_final'];

    
   $id = $_POST['id'];
   $tipo = $_POST['tipo'];
    
   $directorio = '../img/productos/';//ruta de almacenamiento

    // Principal
    if(!is_dir($directorio)){
        mkdir($directorio, 0775, true);
    }

    
    for($i = 0; $i < count($img_producto); $i++){
        if(move_uploaded_file($img_producto['tmp_name'][$i], $directorio . $img_producto['name'][$i])){
            $url_principal[]= $img_producto['name'];
        }else{
            $respuesta = array(
                'respuesta'=>error_get_last()
            );
        }
            
    }

    
    if(isset($url_principal)){
        $url_principal = arregloURL($url_principal[0]);
    }else{
        $url_principal='';
    }
    // die(json_encode($url_principal));
    //barra
    if(move_uploaded_file($img_barra['tmp_name'], $directorio . $img_barra['name'])){
        $url_barra = $img_barra['name'];
    }else{
        $url_barra = '';
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }

    $seleccion = arregloURL($puntos);
       
       
    
        // die(json_encode($_POST));
    
    try{
        if($url_principal !== '' && $url_barra !== ''){

            #con todo
            $stmt = $conn->prepare("UPDATE productos SET titulo_producto =? , frase_producto = ?, id_cat = ?, precio = ?, texto_descripcion = ?, texto_principal = ?, beneficios =? , ingredientes =? , modo_uso=?, url_imagenes=?, texto_barra=?,url_barra=?,seleccion=?,texto_final=?,editado=NOW(),tipo=? WHERE id_producto = ?");
            $stmt->bind_param('ssissssssssssssi', $titulo,$frase,$categoria,$precio,$definicion_corta,$definicion_larga,$beneficios,$ingrediente,$modo_uso,$url_principal,$texto_barra,$url_barra,$seleccion, $texto_final, $tipo, $id);
        

        }else if($url_principal !== ''){

            #con imagenes producto

            $stmt = $conn->prepare("UPDATE productos SET titulo_producto =? , frase_producto = ?, id_cat = ?, precio = ?, texto_descripcion = ?, texto_principal = ?, beneficios =? , ingredientes =? , modo_uso=?, url_imagenes=?, texto_barra=?, seleccion=?,texto_final=?,editado=NOW(),tipo=? WHERE id_producto = ?");
            $stmt->bind_param('ssisssssssssssi', $titulo,$frase,$categoria,$precio,$definicion_corta,$definicion_larga,$beneficios,$ingrediente,$modo_uso,$url_principal,$texto_barra,$url_barra,$seleccion, $texto_final, $tipo, $id);

        }else if($url_barra !== ''){
            
            #barra

            $stmt = $conn->prepare("UPDATE productos SET titulo_producto =? , frase_producto = ?, id_cat = ?, precio = ?, texto_descripcion = ?, texto_principal = ?, beneficios =? , ingredientes =? , modo_uso=?, texto_barra=?,url_barra=?,seleccion=?,texto_final=?,editado=NOW(),tipo=? WHERE id_producto = ?");
            $stmt->bind_param('ssisssssssssssi', $titulo,$frase,$categoria,$precio,$definicion_corta,$definicion_larga,$beneficios,$ingrediente,$modo_uso,$url_principal,$texto_barra,$url_barra,$seleccion, $texto_final, $tipo, $id);

        }else{

            $stmt = $conn->prepare("UPDATE productos SET titulo_producto =? , frase_producto = ?, id_cat = ?, precio = ?, texto_descripcion = ?, texto_principal = ?, beneficios =? , ingredientes =? , modo_uso=?, texto_barra=?,seleccion=?,texto_final=?,editado=NOW(),tipo=? WHERE id_producto = ?");
            $stmt->bind_param('ssissssssssssi', $titulo,$frase,$categoria,$precio,$definicion_corta,$definicion_larga,$beneficios,$ingrediente,$modo_uso,$texto_barra,$seleccion, $texto_final, $tipo, $id);

        }
       
        $puntos = $_POST['puntos'];
        $tipo = $_POST['tipo'];
        $img_producto = $_FILES['archivo_producto'];
        $img_barra = $_FILES['archivo_barra'];
        
        // die(json_encode($stmt->affected_rows));
        $stmt->execute();
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Producto actualizado correctamente'
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

if($_POST['registro'] === 'eliminar'){

    $id = $_POST['id'];
    
    try{
        $stmt = $conn->prepare("DELETE FROM tratamientos WHERE id_tratamiento= ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
       
        if($stmt->affected_rows){
            $respuesta = array(
                'respuesta'=>'correcto',
                'id_eliminado'=>$id
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












