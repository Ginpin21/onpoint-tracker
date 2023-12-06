<?php
session_start();
require('../inc/connection.php');
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $sql = "SELECT * FROM user WHERE user_email = '$email' AND user_password = '$pass' ";
    $result = mysqli_query($conn, $sql);
    $final = mysqli_num_rows($result);
    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['first_name'] = $row['user_fname'];
            $_SESSION['last_name'] = $row['user_lname'];
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['role_id'] = $row['user_role_id'];
            $_SESSION['course_id'] = $row['user_course_id'];
            if ($_SESSION['role_id'] == 1) {
                header("Location: admin_dashboard.php");
            } elseif ($_SESSION['role_id'] == 2) {
                header("Location: student_dashboard.php");
            } else {
                header("Location: teacher_dashboard.php");
            }
        }
    } else {
        echo "<script>alert('Please enter your correct details')</script>";
    }
}
