<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crime Report</title>
</head>
<body>
    <header>
        <div class="logo">
        <div class="navbar">
            <ul>
                <li>Home</li>
                <li>About</li>
                <li>Contact</li>
            </ul>
        </div>
    </header>
    <section>
        <form action="./includes/user_login.php" method="POST">
            <h1>Login</h1>
            <input type="number" name="usr_number" placeholder="Enter your id number">
            <input type="email"  name="usr_email" placeholder="Enter your email..">
            <input type="number" name="usr_phonenumber" placeholder="Enter your phone number..">
            <input type="text"   name="usr_fullname" placeholder="Enter your name..">
            <input type="password" name="usr_passwd" placeholder="Enter your password..">
            <input type="submit" value="Create Account">
        </form>
    </section>
</body>
</html>