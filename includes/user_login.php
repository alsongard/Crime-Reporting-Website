<?php

// check if submit data form is correct 
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $userid = $_POST["usr_number"];
    $useremail = $_POST["usr_email"];
    $userphone = $_POST["usr_phonenumber"];
    $username = $_POST["usr_fullname"];
    $userpasswd = $_POST["usr_passwd"];
    try
    {
        //import file
        require_once "dbh.inc.php";
        $query = "INSERT INTO user_login_data(id_number, email, phone_number, user_name, user_pswd) VALUES (:userid, :useremail, :userphone, :username, :userpassword)";

        //prepare statement
        $stmt =$pdo->prepare($query);
        $stmt -> bindParam("userid",$userid);
        $stmt -> bindParam("useremail",$useremail);
        $stmt -> bindParam("userphone", $userphone);
        $stmt -> bindParam("username", $username);
        $stmt -> bindParam("userpassword", $userpasswd);

        $stmt -> execute();
        header("Location: ../index.php");
        $stmt = null;
        $pdo = null;
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