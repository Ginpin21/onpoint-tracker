<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Screen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <?php 
   if(isset($_GET["class_id"])){
    require_once('..\inc\head.php'); ?>
    <style>
        .container {
            margin: 70px;
            padding-left:25%;
        }
    </style>
</head>

<body>

   <?php require_once('..\inc\navbar.php'); ?>
   <?php require_once('..\inc\teacher_sidebar.php'); 
    ?>

    <section class="container">
        <h1>Attendance</h1>
        <table class="table">
            <thead>
                <tr class="table-primary">
                    <th scope="col">
                        ID
                    </th>
                    <th scope="col">
                        First Name
                    </th>
                    <th scope="col">
                        Last Name
                    </th>
                    <th scope="col">
                        Course
                    </th>
                    <th scope="col">
                        Attendance
                    </th>
                </tr>
            </thead>
            <tbody>
                
            </tbody>
    </table>
    </section>
    <?php
    }
    else{
        header("Location:teacher_dashboard.php");
    }?>
</body>

</html>