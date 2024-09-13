<?php 
    require_once "./includes/signup_view.inc.php";
    require_once "./includes/login_view.inc.php";
    require_once "./includes/config.inc.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Report Website</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Crime Report</h1>
        </div>
        <ul class="navbar">
            <a href="#home"><li>Home</li></a>
            <a href="#about"><li>About</li></a>
            <a href="#contact"><li>Contact</li></a>
            <a href="#services"><li>Services</li></a>
        </ul>
        <button id="reportBtn">Report Crime</button>
        <form action="./includes/logout.inc.php" method="POST">
                <button class="logout">Logout</button>
        </form>
    </header>
    <section id="home">
        <h1>Alson Private Police Force</h1>
        <p>Offering the best security services for our clients.</p>
        <div class="form-container">
            <div class="button-container">
                <button class="active" id="signup">SignUp</button>
                <button id="login">Login</button>
            </div>
            <form action="./includes/registration.php" method="POST">
                <!-- <h1 class="title">Signup</h1> -->
                <input class="user_field" type="text"   name="usr_fullname" placeholder="Enter name...">
                <input class="email_field" type="email"  name="usr_email" placeholder="Enter email...">
                <input class="id_field" type="number" name="usr_number" placeholder="Enter id number...">
                <input class="phone_field" type="number" name="usr_phonenumber" placeholder="Enter phone number...">
                <input class="passwd_field"  type="password" name="usr_passwd" placeholder="Enter password...">
                <input class="passwd_confirm_field" type="password" name="confirm_passwd" placeholder="Confirm password...">
                <input class="submitForm" type="submit" value="Create Account">
            </form>
            <?php
                check_signup_erros();
                check_login_errors();
            ?>
        </div>
    <section>
    <!-----------footer------------>
    <?php
        require_once "footer.php";
    ?>
    <script src="./js/crime_report.js" type="text/javascript"></script>
</body>
</html>

