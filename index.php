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
    </header>
    <section id="home">
        <h1>Alson Private Police Force</h1>
        <p>Offering the best security services for our clients.</p>
        <form action="./includes/user_login.php" method="POST">
            <h1>Signup</h1>
            <input type="text"   name="usr_fullname" placeholder="Enter name...">
            <input type="email"  name="usr_email" placeholder="Enter email...">
            <input type="number" name="usr_number" placeholder="Enter id number...">
            <input type="number" name="usr_phonenumber" placeholder="Enter phone number...">
            <input type="password" name="usr_passwd" placeholder="Enter password...">
            <input type="submit" value="Create Account">
        </form>
    <section>
    <!-----------footer------------>
    <section></section>
    <footer>
        <div class="footer-content">
            <!--footnavbar-->
            <ul class="navbar subcontent">
                <h2 id="title">Get in Touch</h2 >
                <a href="#home"><li>Home</li></a>
                <a href="#about"><li>About</li></a>
                <a href="#contact"><li>Contact</li></a>
                <a href="#services"><li>Services</li></a>
            </ul>
            <ul class="services subcontent">
                <h2 id="title">Services</h2 >
                <a href="#report_crime"><li>Report Crime</li></a>
                <a href="#services"><li>National Security</li></a>
                <a href="#services"><li>Information & Cybersecurity</li></a>
            </ul>
            <!-----contact/getintouch---->
            <div class="contact subcontent">
                <h2 id="title">Contact</h2 >
                <p>Email: alsonservices@gmail.com</p>
                <p style="text-align:unset;">Phone: +12323434</p>
            </div>
             <!----address-->
             <div class="address subcontent">
                <h2 id="title">Address</h2>
                <p>Moscow Street No. 123</p>
            </div>
        </div>
        <p>&copy; 2020 Crime Report</p>
    </footer>
</body>
</html>

