<?php

function patient_report()
{
    global $conn;
    require('patientvalidate.php');
    $var1 = '';
    $var1 = $_SESSION['id'];
    $sql = "SELECT * FROM report WHERE patient_no = '$var1' ";
    $result = mysqli_query($conn, $sql);
    $final = mysqli_num_rows($result);
    if ($final > 0) {
        while ($row = mysqli_fetch_array($result)) {
            $pn = $row['patient_no'];
            $date = $row['date'];
            $doc = $row['doctor_name'];
            $diagnosis = $row['diagnosis'];
            $psyc_status = $row['psyc_status'];
            $chronic_disease = $row['chronic_disease'];
            $medications = $row['medications'];
            $advice = $row['advice'];


            echo "<tr>
      
      <td>$pn</td>
      <td>$doc</td>
      <td>$diagnosis</td>
      <td>$psyc_status</td>
      <td>$chronic_disease</td>
      <td>$medications</td>
      <td>$advice</td>
      <td>$date</td>  
    </tr>";
        }
    } else {
        echo "<script>alert('The record cant be found')</script>";
    }
}
