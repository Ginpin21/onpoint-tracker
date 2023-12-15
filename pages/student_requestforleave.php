<!-- leave_request.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Request for Leave forms</title>
  <link rel="stylesheet" href="../pages/student_home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<<<<<<< HEAD
=======
  <?php require_once('..\pages\student_nav.php'); ?>
>>>>>>> ad649f0facffd689dab8efb6f38f54d95456c7f0
  <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: "Poppins", sans-serif;
}
    .navbar {
      padding: 10px
    }

    .navbar-nav .active a {
      font-weight: bold;
    }

    .name {
      background-color: #B3BFB8;

      display: flex;
      gap: 20px;
      padding: 10px;
      border-radius: 10px;
      margin-bottom: 10px;
    }


    .box {
      border-radius: 10px;
      height: 40px;
      width: 100%;
      padding-left: 10px;
    }
    

    .btn-primary,
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited {
      background-color: #003DB2 !important;
    }

    .container {
      padding-left: 25%;
    }

    .container-fluid {
      top: 0;
      position: fixed;
      z-index: 1000;
    }
    
  </style>
<<<<<<< HEAD
=======
  <?php
  // Assuming you have the student_id and teacher_id available
  // For demonstration purposes, replace these with the actual IDs
  $student_id = 1;  // Replace with the actual student ID
  $teacher_id = 1;  // Replace with the actual teacher ID
  ?>
>>>>>>> ad649f0facffd689dab8efb6f38f54d95456c7f0
</head>
<body>
  <?php require_once('..\inc\nav.php'); ?>
  <?php require_once('..\pages\student_sidebar.php'); ?>
  <main class="container">
    <?php
require('../inc/connection.php');
  if(isset($_POST['submit'])){
    $user_id = $_SESSION['user_id'];
    $module_id = $_POST['module'];
    $leave_reason = $_POST['leave_reason'];
    $leave_date = $_POST['leave_date'];

  //$insert_query = "INSERT INTO leave_request VALUES ('$leave_reason','$leave_date')";
  $insert_query = "INSERT INTO leave_request(leave_id,leave_student_id,leave_module_id,leave_reason,leave_date) VALUES(NULL,\"$user_id\",\"$module_id\",\"$leave_reason\",date(\"$leave_date\"))";
  
  $result=mysqli_query($conn,$insert_query);

  if ($result===true){
    echo "Successfully inserted values";
  }
  else{
    echo "Error submitting leave request: " . mysqli_error($conn);
  }
  
}
    ?>
    <section id="create-class-section">
      <h1 class="mb-5"> <?php //echo $user_fname; ?>
      Register this Leave Form</h1>
      <?php
      //if ($insert==false)
      //echo "Thanks for Submitting your form<"
      ?>
      <form class="shadow px-5 py-3 rounded" method="POST" action="..\pages\student_requestforleave.php">
      
        <div class="row">
          <div class="col">
            <div>
              <label for="leave_date">Date for Leave</label><br>
              <input class="box" type="date" name="leave_date" required>
            </div>
          </div>
          <div class="col">
            <div>
              <label for="leave_module_name">Specify Module</label><br>
              <select name="module" id="usercourse">
                            <?php
                            require("../inc/connection.php");
                            $student_course_id=$_SESSION['course_id'];
                            $qry = "Select module_id,module_name from module where module_course_id=$student_course_id";
                            $execute = mysqli_query($conn, $qry);
                            $final = mysqli_num_rows($execute);
                            if ($final > 0) {
                                while ($row = mysqli_fetch_array($execute)) {
                                    $id = $row['module_id'];
                                    $name = $row['module_name'];
                                    echo "<option value='$id'>$name</option>";
                                    echo $id;
                                }
                            } else {
                                echo "<script> The table is empty </script>";
                            }
                            ?>
                        </select>
            </div>
          </div>
        </div>
        <br>
        <div class="col">
            <div>
              <label for="leave_reason">Reason for Leave</label><br>
              <input class="box"  type="text" name="leave_reason" required>
            </div>
          </div>
        </div>
        <br>
        <div class="row mt-3">
          <button class="mt-5 btn btn-primary" type="Submit" name="submit" value="submit">Submit</button>
        </div>
      </form>
    </section>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
  </script>
</body>

<<<<<<< HEAD
</html>
=======
  <?php require_once('..\pages\student_nav.php'); ?>
  <?php require_once('..\pages\student_sidebar.php'); ?>
  <section class="container">

    <?php require_once('student_nav.php'); // Include your header file 
    ?>
    <div class="container">
      <h2>Request for Leave</h2>

      <!-- Add leave request form or information here -->
      <form action="process_leave_request.php" method="post">
        <input type="hidden" name="student_id" value="<?php echo $student_id; ?>">
        <input type="hidden" name="teacher_id" value="<?php echo $teacher_id; ?>">

        <label for="leave_reason">Reason for Leave:</label>
        <textarea name="leave_reason" id="leave_reason" rows="4" required></textarea>
        <br>
        <button type="submit">Submit Leave Request</button>
      </form>
>>>>>>> ad649f0facffd689dab8efb6f38f54d95456c7f0
