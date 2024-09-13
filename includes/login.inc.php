<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $useremail = $_POST["usr_email"];
        $userpassword = $_POST["usr_passwd"];

        try
        {
            require_once "./dbh.inc.php";
            require_once "./login_model.inc.php";
            require_once "./login_contr.inc.php";
            require_once "./login_view.inc.php";
            
            // ERRORS
            $loginErrors = [];
    
            if (is_input_empty($useremail, $useremail)) //if it eveluates to true perform
            {
                //action
                $loginErrors["empty_input"] = "Fill all Fields!";
            }
            if (is_valid_email($useremail))
            {
                $loginErrors["invalid_email"] = "Enter Valid Email!";
            }
    
            $result = get_user_details( $pdo, $useremail);
    
            // check if usermail is not exit
            if (is_useremail_wrong($result)) // $result is true
            {
                $loginErrors["useremail_not_exist"] = "Usermail does not exit!";
            }
            
            //check if usermail exist, password wrong
            if (!is_useremail_wrong($result) && is_password_correct($userpassword, $result["user_pswd"]))
            {
                $loginErrors["wrong_password"] = "Password is Wrong!";
            }
    
            require_once "./config.inc.php";
    
            if ($loginErrors)
            {
                $_SESSOIN["login_errors"] = $loginErrors;
                header("Location: ../index.php");
                die();
            }

            $_SESSION['username'] = htmlspecialchars($result["user_name"]);
            $_SESSION["user_id"] = htmlspecialchars($result["id_number"]);
            header("../landing.php?login=successfull");
            $stmt = null;
            $pdo = null;
            die();
        }
        catch(PDOException $e)
        {
            die( "Connection failed ". $e->getMessage());
        }

    
    }
    else
    {
        header("Location: ../index.php");
    }