let signBtn = document.getElementById("signup");
let loginBtn = document.getElementById("login");
let user_field = document.querySelector(".user_field");
let id_field = document.querySelector(".id_field");
let passwd_confirm = document.querySelector(".passwd_confirm");
let phone_field = document.querySelector(".phone_field");
let title = document.querySelector(".title");
let submitBtn = document.getElementById("submit");
let form = document.querySelector("form");

loginBtn.addEventListener("click", ()=>{
    form.action = "../includes/login.inc.php";
    user_field.style.display = "none";
    id_field.style.display = "none";
    passwd_confirm.style.display = "none";
    phone_field.style.display = "none";

    loginBtn.style.backgroundColor = "rgba(237, 233, 230, 0.807)";
    signBtn.style.backgroundColor = "transparent";
    submitBtn.style.value = "Login";
} );

signBtn.addEventListener("click", ()=>{
    form.action = "../includes/user_login.php";
    user_field.style.display = "block";
    id_field.style.display = "block";
    passwd_confirm.style.display = "block";
    phone_field.style.display = "block";
    loginBtn.style.backgroundColor = "transparent";
    signBtn.style.backgroundColor = "rgba(237, 233, 230, 0.807)";
} )