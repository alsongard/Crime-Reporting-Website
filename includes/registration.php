<?php

// check if submit data form is correct 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $username = $_POST["usr_fullname"];
    $useremail = $_POST["usr_email"];
    $userid = $_POST["usr_number"];
    $userphone = $_POST["usr_phonenumber"];
    $userpasswd = $_POST["usr_passwd"];
    $confirmpasswd = $_POST["confirm_passwd"];
    try
    {
        //import file
        require_once "dbh.inc.php";
        //mcv(model control view)
        require_once "./signup_model.inc.php";
        require_once "./signup_contr.inc.php";
        require_once "./signup_view.inc.php";

        $errors = [];
        if (password_similar($userpasswd, $confirmpasswd))
        {
            $errors["password_match"] = "Password do not mathc";
        }
        if (is_input_empty($username, $useremail, $userid, $userphone, $userpasswd))
        {
            $errors["empty_field"] = "Fill all fields";
        }
        if (is_email_valid($useremail))
        {
            $errors["email_valid"] = "Provide a valid email";
        }
        if (is_username_taken($pdo,  $username))
        {
            $errors["username_taken"] = "Username already taken";
        }
        if (is_email_taken($pdo,  $useremail))
        {
            $errors["email_taken"] = "Email already taken";
        }
        if (is_phone_taken($pdo, $userphone))
        {
            $errors["phone_taken"] = "Phone number already taken";
        }
        if (is_id_taken( $pdo, $userid))
        {
            $errors["id_taken"] = "Id number already taken";
        }

        require_once "config.inc.php";
        if ($errors)
        {
            $_SESSION["signup_errors"] = $errors;
            header("Location: ../index.php");
            die();
        }
        create_user($pdo, $username, $useremail, $userid, $userphone, $userpasswd);
        header("Location: ../index.php");
        $stmt = null;
        $pdo = null;
        die();
        
    }
    catch(PDOException $e)
    {
        die( "Connection error : ". $e->getMessage());
    }
}
else
{
    header("Location: ../index.php");
    exit();
}