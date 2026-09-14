<?php

$host = "sql313.infinityfree.com";
$username = "if0_42773278";
$password = "YOUR_DATABASE_PASSWORD";
$database = "if0_42773278_college_demo";

mysqli_report(MYSQLI_REPORT_OFF);

$conn = new mysqli(
    $host,
    $username,
    $password,
    $database
);

if ($conn->connect_errno) {
    die(
        "Database connection failed.<br>" .
        "Error: " . htmlspecialchars($conn->connect_error)
    );
}

$conn->set_charset("utf8mb4");

?>
