<?php
session_start(); // it will start the session


require('../inc/connection.php'); // it will include the con.php file



if (isset($_POST['Login'])) { // the script will execute once the button is clicked

    $name = $_POST['name']; // will take the value of username into username attribute
    $pass = $_POST['pass']; // will take the value of password into password attribute

    $sql = "SELECT * FROM user WHERE user_fname = '$name' AND user_password = '$pass' ";

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
