<!-- leave_request.php -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Screen</title>
  <link rel="stylesheet" href="../pages/student_home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <?php require_once('..\pages\student_nav.php'); ?>
  <style>
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
      width: 450px;
      padding-left: 10px;
    }

    .btn-primary,
    .btn-primary:hover,
    .btn-primary:active,
    .btn-primary:visited {
      background-color: #003DB2 !important;
    }

    .grid {


      display: grid;
      /* grid-template-columns: minmax(1fr,2); */
      grid-template-columns: repeat(3, 1fr);
      gap: 30px;


    }







    .container {
      padding-left: 300px;
    }
  </style>
  <?php
  // Assuming you have the student_id and teacher_id available
  // For demonstration purposes, replace these with the actual IDs
  $student_id = 1;  // Replace with the actual student ID
  $teacher_id = 1;  // Replace with the actual teacher ID
  ?>
</head>

<body>



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