<?php


    if($_POST['registro'] == 'crear'){
        echo "<pre>";
        var_dump($_POST);
        echo "</pre>";

        $nombre=$_POST['nombre'];
        $apellido=$_POST['apellido'];
        
        $correo=$_POST['correo'];
        $password = $_POST['password'];
        if(isset($_POST['boletin'])){
            $boletin=1;
        }else{
            $boletin=0;
        }
        if(isset($_POST['personalizacion'])){
            $personalizacion=1;
        }else{
            $personalizacion=0;
        }
        if(isset($_POST['datos'])){
            $datos=1;
        }else{
            $datos=0;
        }

        $opciones = array(
            'cost'=> 12
        );
        // die(json_encode($_POST));
        $password_hashed = password_hash($password, PASSWORD_BCRYPT, $opciones);
        echo $nombre . "<br>";
        echo $apellido. "<br>";
        echo $correo. "<br>";
        echo $password_hashed. "<br>";
        echo $datos. "<br>";
        echo $personalizacion. "<br>";
        echo $boletin. "<br>";

        try{
            require('includes/funciones/conexion.php');
            $stmt = $conn->prepare("INSERT INTO usuario (nombre, apellido, correo, pass, personalizado, suscripcion, datos, editado) VALUES (?,?,?,?,?,?,?,NOW())");
            $stmt->bind_param("ssssiii", $nombre,$apellido,$correo,$password_hashed, $personalizacion,$boletin, $datos);
            $stmt->execute();
            $id_registro = $stmt->insert_id;
            if($id_registro >0){
                $respuesta = array(
                    'respuesta'=>'correcto',
                    'id_registro'=>$id_registro,
                    'tipo'=>'registro'
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

        if($respuesta['respuesta'] == 'correcto'){
            header('Location:login.php?accion=inicio');
        }else{
            header('Location:login.php?accion=registro');
        }




    }elseif($_POST['registro'] == 'iniciar'){
            $correo = $_POST['correo'];
            $password = $_POST['password'];
            try{
                $stmt = $conn->prepare("SELECT * FROM `usuario` WHERE correo = ?");
                // echo $stmt;
                $stmt->bind_param('s', $correo);
                $stmt->execute();
                $stmt->bind_result($id_usuario, $nombre, $apellido, $correo, $password_bd, $personalizacion, $suscripcion, $datos ,$editado);
               
        
                if($stmt->affected_rows){
                    
                    $existe = $stmt->fetch();
                    if($existe){
                        if(password_verify($password, $password_bd)){
                            session_start();
                            $_SESSION['correo'] = $correo;
                            $_SESSION['nombre'] = $nombre;
                            $_SESSION['apellido'] = $apellido;
                            $_SESSION['id'] = $id_admin;
                            $respuesta = array(
                                'respuesta'=>'correcto',
                                'tipo'=>'login',
                                'nombre'=> $nombre_admin
                            );
                        }else{
                            $respuesta = array(
                                'respuesta'=>'error 1'
                            );
                        }
                    }
                    $stmt->close();
                    $conn->close();
                }else{
                    $respuesta = array(
                        'respuesta'=>'error'
                    );
                }
            }catch(Exception $e){
                echo "Error: " . $e->getMessage();
            }
        
            die(json_encode($respuesta));
            if($respuesta['respuesta'] == 'correcto'){
                header('Location:cuenta.php?i=true');
            }else{
                header('Location:login.php?accion=inicio');
            }
        
    }