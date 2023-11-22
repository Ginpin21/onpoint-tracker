<?php
session_start(); // it will start the session
require('../inc/connection.php'); // it will include the con.php file
if (isset($_POST['Register'])) { // the script will execute once the button is clicked

    $fname = $_POST['firstName']; 
    $lname = $_POST['lastName']; 
    $email = $_POST['email'];
    $pass = $_POST['password']; 
    $role_id = $_POST['role_id'];

    $sql = "INSERT into user (user_fname, user_lname, user_email, user_password, user_role_id) VALUES ('$fname', '$lname', '$email', '$pass', '$role_id')";

    $result = mysqli_query($conn, $sql); // will execute the query
    $final = mysqli_num_rows($result); // will check whether the table is empty or not

    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) { // will fetch the data from the table
            $_SESSION['loggedin'] = TRUE;
            $_SESSION['name'] = $row['user_fname']; 
            $_SESSION['email'] = $row['user_email'];
            header("Location:index.php"); // redirect
        }
    } else {
        echo "<script>alert('Please enter your correct details')</script>";
    }
}
