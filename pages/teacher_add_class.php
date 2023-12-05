<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Screen</title>
    <link rel="stylesheet" href="../inc/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <?php 
    if(isset($_GET["module_id"])){
    require_once('..\inc\head.php'); ?>
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
            padding: 0 10px;
        }
        .btn-outline-primary, .btn-outline-primary:active, .btn-outline-primary:visited {
    border-color: #003DB2 !important;
    color: #003DB2 !important;
    }
    .btn-outline-primary:hover{
    color: #FFFFFF !important;
    background-color: #004ED2 !important;
}
        .btn-primary, .btn-primary:active, .btn-primary:visited {
    background-color: #003DB2 !important;
    }
.btn-primary:hover{
    background-color: #004ED2 !important;
}

  .container {
            padding-left: 20%;
        }
    </style>
</head>

<body>



   <?php require_once('..\inc\navbar.php'); ?>
   <?php require_once('..\inc\teacher_sidebar.php'); 
    ?>

    <section class="container">
       <?php
         $module_id = $_GET["module_id"];
         $module_name="";
         if($result = mysqli_query($conn,"SELECT module_name from module where module_id=$module_id")){
            $row = mysqli_fetch_assoc($result);
            $module_name=$row["module_name"];
         }
         
        ?>
        <h1 class="mb-5"><?php echo $module_name;?> Classes</h1>
        <h3>Create Class </h3>
        <form class="shadow px-5 py-3" method="POST" action="../functions/create_class_script.php">
            <input value="<?php echo $module_id; ?>" type="hidden" name="module_id" >
            <div class="row">
                <div class="col-6">
                    <div>
                        <label for="class_name">Class Name</label><br>
                        <input class="box" placeholder="eg: Introduction to Scrum" type="text" name="class_name" required>
                    </div>
                </div>
                
                <div class="col-6">
                    <div>
                        <label for="class_location">Class Location</label><br>
                        <input class="box" placeholder="eg: Classroom 5" type="text" name="class_location" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div>
                        <label for="class_date">Class Date</label><br>
                        <input class="box" type="date" name="class_date"
                        value="<?php echo date('Y-m-d');?>"
                        >
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <label for="class_time">Class Time</label><br>
                        <input class="box" type="time" name="class_time"
                        value="09:30"
                        >

                    </div>
                </div>
            </div>

            <div class="row">
                 <button class="mt-3 btn btn-primary" type="Submit" name="submit" value="submit">Create Class</button>
            </div>

    </form>
        <h3 class="mt-5">All Classes</h3>

        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">
                        Class Date
                    </th>
                    <th scope="col">
                        Class Time
                    </th>
                    <th scope="col">
                        Class Name
                    </th>
                    <th scope="col">
                        Class Location
                    </th>
                    <th scope="col">
                        Present
                    </th>
                    <th scope="col">
                        Late
                    </th>
                    <th scope="col">
                        Absent
                    </th>
                    <th scope="col">
                    </th>
                    <th scope="col">
                    </th>
                </tr>
            </thead>
            <tbody>
               <?php
                $select_query = "SELECT * from class_attendance_view where class_module_id = $module_id";
                $get_query = mysqli_query($conn,$select_query);
                if($get_query){
                  $result = mysqli_fetch_all($get_query);
                  foreach($result as $attendance){ 
                ?>
                <tr>
                    <td>
                       <?php echo date('d-m-Y',strtotime($attendance[1]));?>
                    </td>
                    <td>
                       <?php echo date('h:i A',strtotime($attendance[2]));?>
                    </td>
                    <td>
                       <?php echo $attendance[3];?>
                    </td>
                    <td>
                       <?php echo $attendance[4];?>
                    </td>
                    <td>
                       <?php echo $attendance[5];?>
                    </td>
                    <td>
                       <?php echo $attendance[6];?>
                    </td>
                    <td>
                       <?php echo $attendance[7];?>
                    </td>
                    <td>
                        <a class="btn btn-primary" href="#">Edit</a>
                    </td>
                    <td>
                        <a class="btn btn-outline-primary" 
                        href="view_attendance.php?class_id=<?php echo $attendance[0]?>">View</a>
                    </td>
               <?php
                }}}
                else{
                    header("Location:index.php");
                }
                ?>
                </tr>
            </tbody>
        </table>
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