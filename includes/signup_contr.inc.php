<?php
    //file is used for controlling 

    declare(strict_types=1);

    // function for checking empyt values
    function is_input_empty(string $name, string $email, string $id, string $phone, string $password)
    {
        if (empty($name) || empty($email) || empty($id) || empty($phone) || empty($password))
        {
            return true;
        }
    }

    // function for checking valid email
    function is_email_valid(string $email)
    {
        if (!filter_var($email,  FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
    }

    // function for   checking username takes
    function is_username_taken(object $pdo, string $name)
    {
        //interacting with database function in signup_model.inc.php
        if (get_user_name($pdo, $name))
        {
            return true;
        }
    }

    //function for checking id taken
    function is_email_taken(object $pdo, string $email)
    {
        //interacting with database function in signup_model.inc.php
        if (get_user_email($pdo, $email))
        {
            return true;
        }
    }

    //function for checking if phone numbr taken
    function is_phone_taken(object $pdo, string $phone)
    {
        if (get_phone_number($pdo, $phone))
        {
            return true;
        }
    }

    //functionfor checking if id taken
    function is_id_taken(object $pdo, string $idnumber)
    {
        if (get_id_number($pdo, $idnumber))
        {
            return true;
        }
    }
    // function for chekcing if passwod and confirm password same
    function password_similar(string $password, string $confirmpassword)
    {
        if ($password != $confirmpassword)
        {
            return true;
        }
    }


