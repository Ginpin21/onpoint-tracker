<?php
session_start();
require('../inc/connection.php');
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $sql = "SELECT user.*, role.role_name from user JOIN role on user.user_role_id=role.role_id where user_email = '$email' AND user_password = '$pass';";
    $result = mysqli_query($conn, $sql);
    $final = mysqli_num_rows($result);
    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) { // will fetch the data from the table
            session_start(); // it will start the session
            $_SESSION['logged_in'] = true;
            $_SESSION['first_name'] = $row['user_fname'];
            $_SESSION['last_name'] = $row['user_lname'];
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['course_id'] = $row['user_course_id'];
            $_SESSION['name'] = $row['role_name'];
            echo  $_SESSION['name'];
            if ($_SESSION['name'] == 'Administrator') {
                header("Location: admin_dashboard.php");
            } elseif ($_SESSION['name'] == 'Student') {
                header("Location: student_dashboard.php");
            } else {
                header("Location: teacher_dashboard.php");
            }
        }
    } else {
        echo "<script>alert('Please enter your correct details')</script>";
    }
}
