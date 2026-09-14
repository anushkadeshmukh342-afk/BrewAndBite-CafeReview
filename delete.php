<?php

include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: view.php");
    exit();
}

$id = $_POST['id'] ?? '';

if (!ctype_digit($id) || (int)$id <= 0) {
    header("Location: view.php");
    exit();
}

$id = (int)$id;

$sql = "DELETE FROM feedback WHERE id = ?";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Unable to process the request.");
}

mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    header("Location: view.php?deleted=1");
    exit();
}

mysqli_stmt_close($stmt);
mysqli_close($conn);

die("Unable to delete the review.");

?>