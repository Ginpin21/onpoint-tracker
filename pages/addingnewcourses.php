<?php

require("../inc/connection.php");

if (isset($_POST['Add Course'])) {

    $course_name = $_POST['course_name'];
    $course_manager_id = $_POST['course_manager_id'];

    $sql = "INSERT INTO course (course_name, course_maanger_id) values ('$course_name', '$course_manager_id')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('New course added Successfuly')</script>";
    } else {
        echo "<script>alert('Sorry an error occured')</script>";
    }
}
