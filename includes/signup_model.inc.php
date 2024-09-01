<?php
    // used for querying and interacting with the database

    //function that checks if username is taken
    function get_user_name(object $pdo, string $username)
    {
        $query = "SELECT user_name FROM user_details WHERE user_name = :username;";

        //prepared statement
        $stmt = $pdo->prepare($query);
        //bind Param
        $stmt->bindParam(":username", $username);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    };

    //function that checks email is taken
    function get_user_email(object $pdo, string $email)
    {
        $query = "SELECT email FROM user_details WHERE email = :useremail;";

        // creating prepared statement
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":useremail", $email);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    };

    //function that checks phonenumber is taken
    function get_phone_number(object $pdo, string $phone)
    {
        $query = "SELECT phone_number FROM user_details WHERE phone_number = :userphone;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":userphone", $phone);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    };

    //function that checks idnumber is taken
    function get_id_number(object $pdo, string $number)
    {
        $query = "SELECT id_number FROM user_details WHERE id_number = :iduser;";
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":iduser", $number);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }
    function create_user(object $pdo, string $name, string $email, string $id, string $phone, string $password)
    {
        $query = "INSERT INTO user_details(id_number, email, phone_number, user_name, user_pswd) VALUES (:userid, :useremail, :userphone, :username, :userpassword);";

        //password hashing
        $options = [
            "cost" => 12
        ];
        $hashedPwd = password_hash($userpasswd, PASSWORD_BCRYPT, $options);
        //prepare statement
        $stmt = $pdo->prepare($query);
        $stmt->bindParam(":username", $name);
        $stmt->bindParam(":useremail",$email);
        $stmt->bindParam(":userid",$id);
        $stmt->bindParam(":userphone", $phone);
        $stmt->bindParam(":userpassword", $hashedPwd);
        $stmt->execute();
    };
    //:userid, :useremail, :userphone, :username, :userpassword