<?php

// connection between php and database // 

$db_host = "localhost";
$user = "root";
$pass = "!#Trebleg29";
$db_name = "projectsca";
$db_port = 3306;

//pdo for user security//
$dsn = "mysql:host=$db_host;port=$db_port;dbname=$db_name;charset=utf8mb4";

try {
    $pdo = new PDO($dsn, $user, $pass);

    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Error mode
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Fetch as associative array

    echo "Database connection successful.";

    $pdo->exec("SET NAMES 'utf8mb4'");

    // for Different time zone //
    // $pdo->exec("SET time_zone = '+00:00'"); // Adjust as necessary

} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}
?>