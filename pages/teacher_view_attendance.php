<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Screen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php 
   if(isset($_GET["class_id"])){
    require_once('..\inc\head.php');
    $class_id = $_GET["class_id"] ?>
    <style>
    .container {
        margin: 70px;
        padding-left: 25%;
    }

    .container-fluid {
        top: 0;
        position: fixed;
        z-index: 1000;
    }
    </style>
</head>

<body>

    <div class="container-fluid">
        <?php require_once('..\inc\navbar.php'); ?>
    </div>
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
                <?php
                $get_attendance_query="SELECT
                 user_id,user_fname,user_lname,course_name,attendance_status,attendance_class_id FROM
                 `attendance`
                 JOIN
                 user,course
                 WHERE
                 attendance.attendance_student_id=user.user_id 
                 and user.user_course_id=course.course_id
                 and attendance.attendance_class_id=$class_id;
                ";
                if($result=mysqli_query($conn,$get_attendance_query)){
                    $attendance_rows = mysqli_fetch_all($result);
                    foreach($attendance_rows as $attendance){ ?>

                <tr>
                    <td>
                        <?php echo $attendance[0];?>
                    </td>
                    <td>
                        <?php echo $attendance[1];?>
                    </td>
                    <td>
                        <?php echo $attendance[2];?>
                    </td>
                    <td>
                        <?php echo $attendance[3];?>
                    </td>
                    <td>
                        <?php 
                        $attendance_status="";
                        $attendance_class="";
                        switch ($attendance[4]) {
                            case 'P':
                                $attendance_status="Present";
                                $attendance_class="w-100 p-2 block text-white bg-success";
                                break;
                            case 'L':
                                $attendance_status="Late";
                                $attendance_class="w-100 p-2 block text-white bg-warning";
                                break;
                            case 'A':
                                $attendance_status="Absent";
                                $attendance_class="w-100 p-2 block text-white bg-danger";
                                break;
                            default:
                                $attendance_status="Absent";
                                break;
                        }
                        ;?>
                        <div class="<?php echo $attendance_class?>"><?php echo $attendance_status?></div>
                    </td>
                </tr>
                <?php  }
                    
                }?>
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