<?php

require("../inc/connection.php");

if (isset($_POST['Add Module'])) {

    $module_name = $_POST['module_name'];
    $module_tutor_id = $_POST['module_tutor_id'];

    $sql = "INSERT INTO module (module_name, module_tutor_id) values ('$module_name', '$module_tutor_id')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('New module added Successfuly')</script>";
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
}
