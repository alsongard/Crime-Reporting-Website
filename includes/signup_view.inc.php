<?php
    // this file is used displaying messages
    declare(strict_types = 1);


    function check_signup_erros()
    {
        if(isset($_SESSION["signup_errors"]))
        {
            $errors = $_SESSION["signup_errors"];
            echo "<br>";
            foreach ($errors as $singleError)
            {
                echo "<br>";
                echo "<p class='msg-error'>" . $singleError . "</p>";
            }
        };

    };