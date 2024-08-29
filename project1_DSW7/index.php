


<?php
session_start(); // Inicia la sesión
if(isset($_SESSION['message'])){
    $message = $_SESSION['message'];
}else {
    $message = null;

}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/indexStyle.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
    <h1>user: d72024, pass: 1234567</h1>
    <div class="contenedor-login">
        <form class="login" action="database-helper/consultas/login.php" style="margin: 0em;" method="POST">
            <div class="title">
                <h1><i class="fa-solid fa-right-to-bracket"></i>      Login</h1>
            </div>
            <div class="input-container">
                <div class="user-container">
                    <label for="user-input">User</label>
                    <input type="text" name="user" maxlength="20" class="user-input" autocomplete="off">
                </div>
                <div class="password-container">
                    <label for="password-input">Password</label>
                        <input type="password" name="password" maxlength="70" class="password-input" autocomplete="off">
                        <button type="button" class="btn btn-light view-btn"><i class='fa-regular fa-eye-slash eye-icon'></i></button>
                </div>
                <div class="submit-container">
                    <button type="submit" class="btn btn-light submit-btn">Enviar</button>
                </div>
                </div>
                <div class="imagen-login">            
                    <img class="login-img" src="assets/animations/gato2.gif" type="video/gif">
                </div>
        </form>
    </div>
    
    <p id="mensaje-error">hoda</p>

    <script>

    var message = <?php echo json_encode($message); ?>;
    console.log("holas")

    if(message  ) {
        Swal.fire({
        icon: "error",
        title: "Oops...",
        text: message,
      });

      <?php 
        session_destroy();
      ?>
    }




    </script>
        
    <script src="js/design.js"></script>
</body>
</html>>
