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
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['first_name'] = $row['user_fname'];
            $_SESSION['last_name'] = $row['user_lname'];
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['course_id'] = $row['user_course_id'];
<<<<<<< HEAD
            $_SESSION['role_name'] = $row['role_name'];
            echo  $_SESSION['role_name'];
            if ($_SESSION['role_name'] == 'Administrator') {
=======
            $_SESSION['name']=$row['role_name'];

            if ($_SESSION['name'] == 'Administrator') {
>>>>>>> 4672c1a71ccfc39014d07cdf2fdcc21e5829f642
                header("Location: admin_dashboard.php");
            } elseif ($_SESSION['role_name'] == 'Student') {
                header("Location: student_dashboard.php");
            } elseif ($_SESSION['role_name'] == 'Teacher') {
                header("Location: teacher_dashboard.php");
            } else {
                header("Location: index.php");
            }
        }
    } else {
        echo "<script>alert('Please enter your correct details')</script>";
        header("Location:login.php");
    }
}
