
const viewBtn = document.querySelector(".view-btn"),
passwordInput = document.querySelector(".password-input");

viewBtn.addEventListener("click", () => {
    if (passwordInput.type === "password"){
        passwordInput.type = "text";
        viewBtn.innerHTML = "<i class='fa-regular fa-eye'></i>";
        viewBtn.classList.add("active");
    } else if (passwordInput.type === "text") {
        passwordInput.type = "password";
        viewBtn.innerHTML = "<i class='fa-regular fa-eye-slash'></i>"; 
        viewBtn.classList.remove("active");
    }
})







