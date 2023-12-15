<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Class</title>
    <link rel="stylesheet" href="../inc/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
    if (isset($_GET["module_id"])) 
        require_once('../inc/head.php'); ?> 
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

            .btn-outline-primary,
            .btn-outline-primary:active,
            .btn-outline-primary:visited {
                border-color: #003DB2 !important;
                color: #003DB2 !important;
            }

            .btn-outline-primary:hover {
                color: #FFFFFF !important;
                background-color: #004ED2 !important;
            }

            .btn-primary,
            .btn-primary:active,
            .btn-primary:visited {
                background-color: #003DB2 !important;
            }

            .btn-primary:hover {
                background-color: #004ED2 !important;
            }

            .container {
                padding-left: 20%;
            }

            .container-fluid {
                top: 0;
                position: fixed;
                z-index: 1000;
            }
        </style>
</head>


<body>
    <?php
    require_once('../pages/student_navbar.php');
    require_once('../pages/student_sidebar.php');

    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
        if ($_SESSION["role_name"] == "Student") {
            $student_id = $_SESSION["user_id"];
            $module_id = $_GET["module_id"];
            require('../inc/conn.php');
    ?>
            <section class="container">
                <h1 class="mb-5">List of Modules Attendance</h1>
                <div class="grid mt-5">
                    <?php
                    $select_query = "SELECT
                        class.class_id,
                        class.class_date,
                        class.class_time,
                        class.class_name,
                        class.class_location,
                        SUM(attendance_status='P') as present,
                        SUM(attendance_status='L') as late,
                        SUM(attendance_status='A') as absent,
                        class.class_module_id
                    FROM
                        class
                    LEFT JOIN
                        attendance
                    ON attendance.attendance_class_id=class.class_id
                    AND attendance.attendance_student_id=$student_id
                    JOIN module ON class.class_module_id = module.module_id
                    JOIN user ON module.module_tutor_id = user.user_id
                    WHERE class.class_module_id = $module_id
                    AND user.user_course_id = (SELECT user_course_id FROM user WHERE user_id = $student_id)
                    GROUP BY
                        class.class_id
                    ORDER BY
                        class.class_date DESC;";
                    $get_query = mysqli_query($conn, $select_query);

                    if ($get_query) {
                        $result = mysqli_fetch_all($get_query);
                        foreach ($result as $attendance) {
                    ?>
                            <div class="card" style="min-width: 20rem;">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?php echo $attendance[3]; ?></h5>
                                    <p class="card-subtitle"><b>Date: </b><?php echo date('d-m-Y', strtotime($attendance[1])); ?></p>
                                    <p class="card-subtitle"><b>Time: </b><?php echo date('h:i A', strtotime($attendance[2])); ?></p>
                                    <p class="card-subtitle"><b>Location: </b><?php echo $attendance[4]; ?></p>
                                    <p class="card-text"><b>Present: </b><?php echo $attendance[5]; ?></p>
                                    <p class="card-text"><b>Late: </b><?php echo $attendance[6]; ?></p>
                                    <p class="card-text"><b>Absent: </b><?php echo $attendance[7]; ?></p>
                                    <a href="student_attendance.php?class_id=<?php echo $attendance[0]; ?>" class="btn btn-primary">View class</a>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </section>
    <?php
        } else {
            header("Location:index.php");
        }
    } else {
        header("Location:index.php");
    }
    ?>
</body>

</html>