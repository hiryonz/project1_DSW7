<?php

    //conexion a la base de datos
    $host = 'localhost';
    $db = 'DB-control';
    $dbuser = 'D72024';
    $dbpass = '1234567';



    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $dbuser, $dbpass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $user = $_POST['user'];
        $pass = $_POST['password'];

        $stmt = $pdo -> prepare('SELECT 1 FROM USUARIO WHERE USUARIO = :user and PASSWORD = :pass');
        $stmt -> bindParam(':user', $user);
        $stmt -> bindParam(':pass', $pass);
        $stmt -> execute();

        $verify = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($verify) {
            echo "correcto";
        }else {
            echo "incorecto";
        }
    } catch (Exception $err) {
        echo $err->getMessage();
    }

?>