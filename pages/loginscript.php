<?php
require('../inc/connection.php');
if (isset($_POST['Login'])) {
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $sql = "SELECT user.*, role.role_name from user JOIN role on user.user_role_id=role.role_id where user_email = '$email' AND user_password = '$pass';";
    $result = mysqli_query($conn, $sql);
    $final = mysqli_num_rows($result);
    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) {
            session_start();
            $_SESSION['logged_in'] = true;
            $_SESSION['user_id'] = $row['user_id'];
            $_SESSION['first_name'] = $row['user_fname'];
            $_SESSION['last_name'] = $row['user_lname'];
            $_SESSION['email'] = $row['user_email'];
            $_SESSION['course_id'] = $row['user_course_id'];
            $_SESSION['role_name'] = $row['role_name'];
            if ($_SESSION['role_name'] == 'Administrator') {
                echo "<script>window.location.href = 'admin_dashboard.php';</script>";
            } elseif ($_SESSION['role_name'] == 'Student') {
                echo "<script>window.location.href = 'student_dashboard.php';</script>";
            } elseif ($_SESSION['role_name'] == 'Teacher') {
                echo "<script>window.location.href = 'teacher_dashboard.php';</script>";
            } else {
                echo "<script>window.location.href = 'index.php';</script>";
            }
        }
    }
    if($email!='user_email' || $pass!='user_password'){
        echo "<script> alert('Invalid Email or password! Try Again'); </script>";
        echo "<script>window.location.href = 'login.php';</script>";
    }
}

