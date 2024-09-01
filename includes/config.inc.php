<?php

    ini_set("session.use_only_cookies", 1);
    ini_set("session.use_strict_mode", 1);


    //cookie parameters setting
    session_set_cookie_params(
        [
            "lifetime" => 1800,
            "domain" => "localhost",
            "path" => "/", 
            "secure" => true,
            "httponly" => true
        ]
    );
    session_start();

    if (!isset($_SESSION["last_generation"]))
    {
        session_regenerate_id(true);
        $_SESSION["last_generate"] = time();
    }
    else
    {
        $interval = 60 * 30;
        if (time() - $session["last_generate"] > $interval)
        {
            session_regenerate_id(true);
            $_SESSION["last_generation"] = time();
        }
    }