<?php
    declare(strict_types = 1);


    // function that checks for empyt input
    function is_input_empty(string $givenEmail, string $givenPasswd)
    {
        if (empty($givenEmail) || empty($givenName))
        {
            return true;
        }
    };

    // funciton that checks if email is valid
    function is_valid_email(string $givenEmail)
    {
        if (!filter_var($givenEmail,  FILTER_VALIDATE_EMAIL))
        {
            return true;
        }
    }
    //checks if the result which is the data acquires in the get_user_details() function in login_model.incp.php file
    //and if the useremail is availabe it will return an array otherwise it will be false
    function is_useremail_wrong(bool|array $result)
    {
        if (!$result)
        {
            return true;
        }
        else
        {
            return false;
        }
    }
    // function that check if password correct
    function is_password_correct(string $givenPasswd, $hashedPasswd)
    {
        if (!password_verify($givenPasswd, $hashedPasswd)) // if statements check if the reuslt of passowrd_verify == false 
        {
            //execute action
            return true;
        }
    }