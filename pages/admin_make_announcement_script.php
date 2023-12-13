<?php
require("../inc/conn.php");
if (isset($_POST['Upload_Notification'])) {
    $notification = $_POST['message'];
    $qry = "INSERT INTO notification (notification_messsage) values ('$notification');";
    $result = mysqli_query($conn, $qry);
    if ($result) {
        echo "<script> alert('Invalid Email or password! Try Again'); </script>";
        header("Location: admin_dashboard.php");
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
}
