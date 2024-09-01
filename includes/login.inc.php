<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        echo "<p>Login Successfully</p>";
    }
    else
    {
        header("Location: ../index.php");
    }