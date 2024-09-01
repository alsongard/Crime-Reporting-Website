//buttons
let signBtn = document.getElementById("signup");
let loginBtn = document.getElementById("login");

//fields
let user_field = document.querySelector(".user_field");
let id_field = document.querySelector(".id_field");
let passwd_confirm = document.querySelector(".passwd_confirm_field");
let phone_field = document.querySelector(".phone_field");


// let title = document.querySelector(".title");


let submit = document.querySelector(".submitForm");
let form = document.querySelector("form");

loginBtn.addEventListener("click", ()=>{
    form.action = "./includes/login.inc.php";
    user_field.style.display = "none";
    id_field.style.display = "none";
    passwd_confirm.style.display = "none";
    phone_field.style.display = "none";

    loginBtn.style.backgroundColor = "rgba(237, 233, 230, 0.807)";
    signBtn.style.backgroundColor = "transparent";
    submit.value = "Login";
} );

signBtn.addEventListener("click", ()=>{
    form.action = "./includes/registration.php";
    user_field.style.display = "block";
    id_field.style.display = "block";
    passwd_confirm.style.display = "block";
    phone_field.style.display = "block";
    loginBtn.style.backgroundColor = "transparent";
    signBtn.style.backgroundColor = "rgba(237, 233, 230, 0.807)";
    submit.value = "Create Account";

} )