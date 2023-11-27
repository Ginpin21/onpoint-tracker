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
       
      <form method='post'>
       <td><input type='hidden' name='id'  class='form-control' value='$id' readonly>$id</td> 
       <td>$id</td>
       <td>$fname</td>
       <td>$lname</td>
       <td>$email</td>
       <td>$role_id</td>
       <td>$course_id</td>
      <td><input type='submit' name='present' class='btn btn-success' value='Present'>  </td> 
      <td><input type='submit' name='absent' class='btn btn-danger' value='Absent'>  </td> 
      <td><input type='submit' name='late' class='btn btn-secondary' value='Late'>  </td> 
     </form>
    </tr>";
    }
} else {
    echo "<script> The table is empty </script>";
}
