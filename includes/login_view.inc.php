<?php

    declare(strict_types = 1);

    //output for logged in
    function outputLoggedIn()
    {
        if (isset($_SESSION["user_id"]))
        {
            echo "<p> Successfully logged in as : " . $_SESSION[$_SESSION['username']]; 
        }
    }
    function check_login_errors()
    {
        if(isset($_SESSION["login_errors"]))
        {
            $errors = $_SESSION["login_errors"];
            echo "<br>";

            
            foreach($errors as $singleError)
            {
                echo "<p class='msg-error'>". $singleError . "</p>";
            }
            unset($_SESSION["login_errors"]);
        }
        else if(isset($_GET["login"]) && $_GET["login"] === "successfull")
        {
            outputLoggedIn();
        }
    }
//header("../landing.php?login=successfull");