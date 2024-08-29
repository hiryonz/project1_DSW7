const adminSession_close = document.querySelector(".cerrar-session1"),
userSession_close = document.querySelector(".cerrar-session2");

if(adminSession_close){
   adminSession_close.addEventListener("click", () => {
     window.location.href = "../close-session.php";
   })
}

if(userSession_close){
    userSession_close.addEventListener("click", () => {
        window.location.href = "../close-session.php";
    })
}
