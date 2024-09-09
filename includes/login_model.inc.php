<?php
    // file will be used for querying and interacting with the database
    declare(strict_types = 1);


    //getting data
    function get_user_details(object $pdo, string $givenEmail)
    {
        $query = "SELECT * FROM user_details WHERE email = :usremail";

        //prepare statement
        $stmt =  $pdo->prepare($query);
        $stmt->bindParam(":usremail", $givenEmail);
        $stmt->execute();

        $resutl = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result;
    }