<?php

require("../inc/connection.php");

$sql = "SELECT * FROM user where user_role_id = 100";
$execute = mysqli_query($conn, $sql);
$result = mysqli_num_rows($execute);
if ($result > 0) {
    while ($row=mysqli_fetch_array($execute)) {

        $id = $row['user_id'];
        $fname = $row['user_fname'];
        $lname = $row['user_lname'];
       

        echo "<tr>
       
      <form method='post'>
        <td>$fname $lname</td>
        <td><input type='submit' name='present' class='btn btn-success' value='Present'>  </td> 
        <td><input type='submit' name='absent' class='btn btn-danger' value='Absent'>  </td> 
        <td><input type='submit' name='late' class='btn btn-secondary' value='Late'>  </td> 
     </form>
    </tr>";
    }
} else {
    echo "<script> The table is empty </script>";
}





if (isset($_POST['present'])) {
    
}


if (isset($_POST['absent'])) {
    
}

if (isset($_POST['late'])) {
 
}