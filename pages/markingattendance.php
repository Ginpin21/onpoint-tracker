<?php

require("../inc/connection.php");

$sql = "SELECT * FROM user where user_role_id = 100";
$execute = mysqli_query($conn, $sql);
$result = mysqli_num_rows($execute);
if ($result > 0) {
    while (mysqli_fetch_array($execute)) {
        
        $id = $row['user_id'];
        $fname = $row['user_fname'];
        $lname = $row['user_lname'];
        $email = $row['user_email'];
        $role_id = $row['user_role_id'];
        $course_id = $row['user_course_id'];

        echo "<tr>
      
      <td>$id</td>
      <td>$fname</td>
      <td>$lname</td>
      <td>$email</td>
      <td>$role_id</td>
      <td>$course_id</td>
    </tr>";

    }
}

else{
    echo "<script> The table is empty </script>";
}
