<?php
include_once('inc/funciones/funciones.php');
function arregloURL($arreglo){
    $json = array();
    
    foreach ($arreglo as $key) {
        if(is_array($key)){
            $key=arregloURL($key);
        }
       
        if($key !== ''){
            $json[] = $key;
        }
    }
    return json_encode($json);
}

$directorio = '../img/blog/';

if($_POST['registro'] === 'nuevo'){

    $contenido= $_POST['contenido'];
    $etiqueta = $_POST['etiqueta'];
    $titulo = $_POST['titulo'];
    $texto_secundario = $_POST['texto'];
    $posicion = $_POST['posicion'];
    $slug = $_POST['slug'];

    $respuesta = array(
        'post'=> $_POST,
        'file'=> $_FILES
    );
    // die(json_encode($respuesta['post']));


    // Principal
    if(!is_dir($directorio)){
        mkdir($directorio, 0775, true);
    }

    if(move_uploaded_file($_FILES['archivo_principal']['tmp_name'], $directorio . $_FILES['archivo_principal']['name'])){
        $url_principal= $_FILES['archivo_principal']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }

    //barra

    if(move_uploaded_file($_FILES['archivo_barra']['tmp_name'], $directorio . $_FILES['archivo_barra']['name'])){
        $url_barra = $_FILES['archivo_barra']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }
    
        $texto_barra = $_POST['barra_contenido'];
    

    //  die(json_encode($_FILES));
    
    try{
        if($_FILES['archivo_principal']['size'] > 0 && $_FILES['archivo_barra']['size'] > 0){

            #con todo
           
            $stmt = $conn->prepare("INSERT INTO blog (titulo_blog, texto_secundario,contenido_blog,url_principal, url_barra, id_etiqueta, principal, editado, slug, texto_barra) VALUES (?,?,?,?,?,?,?,NOW(),?,?)");
            $stmt->bind_param('sssssiiss', $titulo, $texto_secundario,$contenido, $url_principal, $url_barra, $etiqueta, $posicion, $slug, $texto_barra);

        }else if($_FILES['archivo_principal']['size'] > 0){

            #con imagen principal

            $stmt = $conn->prepare("INSERT INTO blog (titulo_blog, texto_secundario,contenido_blog,url_principal, id_etiqueta, principal, editado, slug, texto_barra) VALUES (?,?,?,?,?,?,NOW(),?,?)");
            $stmt->bind_param('ssssiiss', $titulo, $texto_secundario,$contenido, $url_principal, $etiqueta, $posicion, $slug, $texto_barra);

        }else if($_FILES['archivo_barra']['size'] > 0){

            #con barra

            $stmt = $conn->prepare("INSERT INTO blog (titulo_blog, texto_secundario,contenido_blog, url_barra, id_etiqueta, principal, editado, slug, texto_barra) VALUES (?,?,?,?,?,?,NOW(),?,?)");
            $stmt->bind_param('ssssiiss', $titulo, $texto_secundario,$contenido, $url_barra, $etiqueta, $posicion, $slug, $texto_barra);

        }else{

            $stmt = $conn->prepare("INSERT INTO blog (titulo_blog, texto_secundario,contenido_blog, id_etiqueta, principal, editado, slug, texto_barra) VALUES (?,?,?,?,?,NOW(),?,?)");
            $stmt->bind_param('sssiiss', $titulo, $texto_secundario,$contenido, $etiqueta, $posicion, $slug, $texto_barra);

        }
        
        $stmt->execute();
        // die(json_encode($stmt->affected_rows ));
        if($stmt->affected_rows > 0){
            $respuesta = array(
                'respuesta'=>'correcto',
                'mensaje'=>'Blog agregado'
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

    $id=$_POST['id'];

    $contenido= $_POST['contenido'];
    

    $etiqueta = $_POST['etiqueta'];
    $titulo = ($_POST['titulo']);
    $texto_secundario = $_POST['texto'];
    $posicion = $_POST['posicion'];
    $slug = $_POST['slug'];

    $respuesta = array(
        'post'=> $_POST,
        'file'=> $_FILES
    );
    // die(json_encode($respuesta));


    // Principal
    if(!is_dir($directorio)){
        mkdir($directorio, 0775, true);
    }

    if(move_uploaded_file($_FILES['archivo_principal']['tmp_name'], $directorio . $_FILES['archivo_principal']['name'])){
        $url_principal= $_FILES['archivo_principal']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }

    //barra

    if(move_uploaded_file($_FILES['archivo_barra']['tmp_name'], $directorio . $_FILES['archivo_barra']['name'])){
        $url_barra = $_FILES['archivo_barra']['name'];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }
    $texto_barra=$_POST['barra_contenido'];


    //  die(json_encode($_FILES));
    
    try{
        if($_FILES['archivo_principal']['size'] > 0 && $_FILES['archivo_barra']['size'] > 0){

            #con todo
           
            $stmt = $conn->prepare("UPDATE blog SET titulo_blog =?, texto_secundario=?,contenido_blog=?,url_principal=?, url_barra=?, id_etiqueta=?, principal=?, editado=NOW(), slug=?, texto_barra=? WHERE id_blog = ?");
            $stmt->bind_param('sssssiissi', $titulo, $texto_secundario,$contenido, $url_principal, $url_barra, $etiqueta, $posicion,  $slug, $texto_barra, $id);

        }else if($_FILES['archivo_principal']['size'] > 0){

            #con imagen principal

            $stmt = $conn->prepare("UPDATE blog SET titulo_blog =?, texto_secundario=?,contenido_blog=?,url_principal=?, id_etiqueta=?, principal=?, editado=NOW(), slug=?, texto_barra=? WHERE id_blog = ?");
            $stmt->bind_param('ssssiissi', $titulo, $texto_secundario,$contenido, $url_principal, $etiqueta, $posicion,  $slug, $texto_barra, $id);

        }else if($_FILES['archivo_barra']['size'] > 0){

            #con barra

            $stmt = $conn->prepare("UPDATE blog SET titulo_blog =?, texto_secundario=?,contenido_blog=?, url_barra=?, id_etiqueta=?, principal=?, editado=NOW(), slug=?, texto_barra=? WHERE id_blog = ?");
            $stmt->bind_param('ssssiissi', $titulo, $texto_secundario,$contenido, $url_barra, $etiqueta, $posicion,  $slug, $texto_barra, $id);

        }else{

            $stmt = $conn->prepare("UPDATE blog SET titulo_blog =?, texto_secundario=?,contenido_blog=?,id_etiqueta=?, principal=?, editado=NOW(), slug=?, texto_barra=? WHERE id_blog = ?");
            $stmt->bind_param('sssiissi', $titulo, $texto_secundario,$contenido, $etiqueta, $posicion,  $slug, $texto_barra, $id);

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
        $stmt = $conn->prepare("DELETE FROM blog WHERE id_blog = ?");
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




if($_POST['registro'] == 'acordeon'){
    // die(json_encode($_POST));

    $contenidos = $_POST['contenido'];
    $titulos = $_POST['titulo'];
    $id_blog = $_POST['id_blog'];

    for($i=0; $i<count($titulos); $i++){
        $acordeon[]['acordeon'][$i]['titulo'] = $titulos[$i];
        $acordeon[]['acordeon'][$i]['contenido'] = $contenidos[$i];
    }

   

    $res = $conn->query("SELECT contenido_blog FROM blog WHERE id_blog=$id_blog");

    $consulta = $res->fetch_assoc();
    if($consulta['contenido_blog'] !== ''){
        $acordeon[]['contenido_principal'] = $consulta_c['contenido_blog'];
    }
    
    $acordeon = arregloURL($acordeon);
    // die(json_encode($acordeon));
    try{
        $stmt = $conn->prepare("UPDATE blog SET contenido_blog = ? WHERE id_blog=?");
        $stmt->bind_param('si',$acordeon, $id_blog);
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
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));



}

if($_POST['registro'] == 'widget'){
    // die(json_encode($_POST));
    
    $contenidos = $_POST['contenido'];

    //acomodando los contenidos en un solo array
    for($i=0; $i<count($contenidos); $i++){
        $acordeon[]['widget']['contenido'] = $contenidos[$i];
    }
    $id_blog = $_POST['id_blog'];
   
    //realizamos consulta para saber que hy dentro del contenido y actualizar
    $res = $conn->query("SELECT contenido_blog FROM blog WHERE id_blog=$id_blog");
    $consulta = $res->fetch_assoc();

    if($consulta['contenido_blog'] !== ''){
        $acordeon[]['contenido_principal'] = json_decode($consulta['contenido_blog']);
    }

    

   
    if(move_uploaded_file($_FILES['widget_final']['tmp_name']["'imagen'"], $directorio . $_FILES['widget_final']['name']["'imagen'"])){
        $url_widget = $_FILES['widget_final']['name']["'imagen'"];
    }else{
        $respuesta = array(
            'respuesta'=>error_get_last()
        );
    }
   
    $acordeon[]['widget']['w_final']['titulo'] = $_POST['widget_final']["'titulo'"];
    $acordeon[]['widget']['w_final']['imagen'] = $url_widget;

    


    $acordeon = arregloURL($acordeon);
    echo "<pre>";
    var_dump(json_decode($acordeon));
    echo "</pre>";
    die();
    try{
        $stmt = $conn->prepare("UPDATE blog SET contenido_blog = ? WHERE id_blog=?");
        $stmt->bind_param('si',$acordeon, $id_blog);
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
        $stmt->close();
        $conn->close();
    }catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }

    die(json_encode($respuesta));



}
