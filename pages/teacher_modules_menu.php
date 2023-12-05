<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Screen</title>
  <link rel="stylesheet" href="../inc/home.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 <?php
  require_once('..\inc\head.php');
  session_start(); // it will start the session
  require('../inc/conn.php'); 
  ?>
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
    .btn-primary:active,
    .btn-primary:visited {
      background-color: #003DB2 !important;
    }
    .btn-primary:hover{
    background-color: #004ED2 !important;
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
</head>

<body>



 <?php require_once('..\inc\navbar.php'); ?>
 <?php require_once('..\inc\teacher_sidebar.php'); ?>

 
  <section class="container">

    <h1>Modules</h1>
    <div class="grid mt-5">
   <?php
  $select_query = "SELECT module_id,module_name,user_fname,user_lname FROM module,user where module.module_tutor_id=10 and user.user_id=module.module_tutor_id";
  $get_query = mysqli_query($conn,$select_query);
  if($get_query){
    $result = mysqli_fetch_all($get_query);
    foreach($result as $module){ ?>
    <div class="card" style="width: 18rem;">
        <img src="https://www.krasamo.com/wp-content/uploads/agile-01-scaled.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo "$module[1] "?></h5>
          <p class="card-text"><?php echo "$module[2] $module[3]"?></p>
          <a href="teacher_add_class.php?module_id=<?php echo $module[0];?>"class="btn btn-primary">Class List</a>
        </div>
    </div>
     <?php
    }
  }
  ?>
      <!-- <a class="card col text-center" style="width: 18rem;" href="#">
        <img src="https://www.krasamo.com/wp-content/uploads/agile-01-scaled.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Agile</h5>
          <p class="card-text">SWE 6202 - Agile Programming.</p>
          <a href="#" class="btn btn-primary">Tutor: Ifthikar Nyayadish</a>
        </div>
      </a> -->
      <!-- </div> -->
    </div>
  </section>



  <footer class="bg-light text-center text-lg-start">
    <div class="text-center p-4" style="background-color: white; color:black; font-size: 20px; font-weight:600; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); ">
      © 2023 Copyright:
      <a href="home.html" style="font-size: 20px; font: weight 600px; color:#003DB2; text-decoration:none">Onpoint
        Tracker.com</a>
    </div>
  </footer>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>