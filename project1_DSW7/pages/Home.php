<?php
session_start();
if (!isset($_SESSION['user'])) {
    header("Location: ../index.php");
    exit();
}
//$message = $_SESSION['user'];


// Tiempo de expiración en segundos (5 minutos)
$session_timeout = 300; // 5 * 60 segundos

// Verifica si existe una marca de tiempo de la última actividad
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY']) > $session_timeout) {
    // La sesión ha expirado
    session_unset();
    session_destroy();
    header("Location: ../index.php"); // Redirige al usuario a la página de login
    exit();
}

// Actualiza la marca de tiempo de la última actividad
$_SESSION['LAST_ACTIVITY'] = time();
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

</head>
<body>
    <h1>no eres admin xD</h1>
    
    <button class="cerrar-session2">cerrar session</button>
    
    <script src="../js/closeSession.js"></script>
</body>
</html>>
