<?php
//data source name
$dsn = "mysql:host=localhost;dbname=crime_report_database";
$dbuser = "root";
$dbpasswd ="";

try
{
    //php data object more flexible
    //mysqli good for data based(mysql improved)
    $pdo = new PDO($dsn, $dbuser, $dbpasswd);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
