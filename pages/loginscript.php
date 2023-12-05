<?php
session_start(); // it will start the session


require('../inc/connection.php'); // it will include the con.php file



if (isset($_POST['Login'])) { // the script will execute once the button is clicked

    $email = $_POST['email']; // will take the value of username into username attribute
    $pass = md5($_POST['pass']); // will take the value of password into password attribute

    $sql = "SELECT * FROM user WHERE user_email = '$email' AND user_password = '$pass' ";

    $result = mysqli_query($conn, $sql); // will execute the query
    $final = mysqli_num_rows($result); // will check whether the table is empty or not

    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) { // will fetch the data from the table
            $_SESSION['logged_in'] = TRUE;
            $_SESSION['first_name'] = $row['user_fname']; 
            $_SESSION['last_name'] = $row['user_lname']; 
            $_SESSION['email'] = $row['email'];
            $_SESSION['role_id'] = $row['user_role_id']; 
            $_SESSION['course_id'] = $row['user_course_id'];
            header("Location:index.php"); 
        }
    } else {
        echo "<script>alert('Please enter your correct details')</script>";
    }
}