<?php

include 'connect.php';

date_default_timezone_set('Asia/Kolkata');

if ($_SERVER["REQUEST_METHOD"] !== "POST") {
    header("Location: index.php");
    exit();
}

$roll_no = trim($_POST['roll_no'] ?? '');
$student_name = trim($_POST['student_name'] ?? '');
$subject_name = trim($_POST['subject_name'] ?? '');
$rating = trim($_POST['rating'] ?? '');
$feedback_text = trim($_POST['feedback_text'] ?? '');

if (
    empty($roll_no) ||
    empty($student_name) ||
    empty($subject_name) ||
    empty($rating) ||
    empty($feedback_text)
) {
    die("Please fill all the required fields.");
}

if (!is_numeric($rating) || $rating < 1 || $rating > 5) {
    die("Invalid rating.");
}

/*
   Store the rating together with the review
   because the current database table does not
   have a separate rating column.
*/
$final_feedback = "Rating: " . $rating . "/5 - " . $feedback_text;

/*
   Generate the timestamp using Indian Standard Time.
*/
$created_at = date('Y-m-d H:i:s');

$sql = "INSERT INTO feedback
        (roll_no, student_name, subject_name, feedback_text, created_at)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    die("Unable to save the review.");
}

mysqli_stmt_bind_param(
    $stmt,
    "sssss",
    $roll_no,
    $student_name,
    $subject_name,
    $final_feedback,
    $created_at
);

if (mysqli_stmt_execute($stmt)) {

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    header("Location: view.php?success=1");
    exit();

} else {

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    die("Unable to save the review.");
}

?>