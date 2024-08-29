<?php 
    session_start();
    require '../conexion/conexion.php';

    try {   
        $user = $_POST['user'];
        $pass = $_POST['password'];

        $stmt = $pdo -> prepare('SELECT level, PASSWORD FROM USUARIO WHERE USUARIO = :user');
        $stmt -> bindParam(':user', $user);
        $stmt -> execute();

        $verify = $stmt->fetch(PDO::FETCH_ASSOC);
        print_r($verify);       
         if($verify && $pass === $verify["PASSWORD"]) {
            session_regenerate_id(true); 

            $_SESSION['user'] = $user;
            
            if($verify['level'] == 'admin'){
                $_SESSION['es_admin'] = true;
                 header("Location: ../../pages/adminHome.php");
                exit();
            }else {

                 header("Location: ../../index.php");
            }
        }else {
            $_SESSION['message'] = 'Usuario o contraseña incorrectos';
            header("Location: ../../index.php");
           // header('Location: ../../index.php');
            //exit();
        }
    } catch (Exception $err) {
        echo $err->getMessage();
    }


    //header('Content-Type: application/json'); // Envía JSON

?>