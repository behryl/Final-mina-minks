<?php
session_start();
include "../includes/dbconn.php"; // Corrected include statement

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $email = $_POST['emailcont']; // Added semicolon at the end
    $password = $_POST['password']; // Added semicolon at the end

    // Check if email or contact number exists in the database
    // Modified variable name from $emailcont to $email in the query
    $query = "SELECT * FROM tbluser WHERE Email='$email' AND Password='$password'";
    $result = mysqli_query($con, $query);

    if ($result && mysqli_num_rows($result) > 0) { // Added check for successful query execution
        $row = mysqli_fetch_assoc($result);
        $_SESSION['uid'] = $row['ID'];
        $_SESSION['fname'] = $row['FirstName'];
        header("Location: ../admin/sales-reports.php"); // Added semicolon at the end
        exit(); // Added exit to prevent further execution
    } else {
        header("Location: ../login.php?msg=Invalid email/contact number or password"); // Removed unnecessary single quotes around the message
        exit(); // Added exit to prevent further execution
    }
}
?>
