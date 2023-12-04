<?php
require("../inc/connection.php");
if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);
    $role_id = $_POST['role_id'];
    $course_id = $_POST['course_id'];
    $qry = "UPDATE user SET user_fname='$fname', user_lname='$lname', user_email='$email', user_password='$pass', user_role_id='$role_id', user_course_id='$course_id' where user_id='$id'";
    $result = mysqli_query($conn, $qry);
    if ($result) {
        echo "<script>alert('User Updated Successfully')</script>";
        header("Location: admin_dashboard.php");
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
}


if (isset($_POST['delete'])) {
    $id = $_POST['id'];
    $qry = "DELETE from user where user_id='$id'";
    $result = mysqli_query($conn, $qry);
    if ($result) {
        echo "<script>alert('User Delelted Successfuly')</script>";
        header("Location: admin_dashboard.php");
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
}
