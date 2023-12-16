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


</head>

<body>
    <?php
    require_once('../inc/nav.php');
    require_once('../pages/student_sidebar.php');

    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
        if ($_SESSION["role_name"] == "Student") {
            $student_id = $_SESSION["user_id"];
            $module_id = $_GET["module_id"];
            $module_name_query =  "SELECT module_name FROM module where module_id=$module_id";
            $result = mysqli_query($conn, $module_name_query);
            if ($result) {
                $module_name = mysqli_fetch_assoc($result)["module_name"];
            }
            require('../inc/conn.php');
    ?>
            <section class="container">
                <h1 class="mb-5">Attendance for <?php echo $module_name ?></h1>
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
                                Attendance
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $course_id = $_SESSION["course_id"];
                        $select_query = "SELECT
                        class.class_id,
                        class.class_date,
                        class.class_time,
                        class.class_name,
                        class.class_location,
                        attendance.attendance_status,
                        class.class_module_id,
                        module.module_name
                    FROM
                        class
                    JOIN attendance,
                        module
                    WHERE
                        attendance.attendance_class_id = class.class_id
                        AND class.class_module_id = module.module_id
                        AND class.class_module_id = $module_id
                        AND module.module_course_id = $course_id
                        AND attendance.attendance_student_id = $student_id
                    GROUP BY
                        attendance_class_id
                    ORDER BY
                        class.class_date
                    DESC;";
                        $get_query = mysqli_query($conn, $select_query);
                        if ($get_query) {
                            $result = mysqli_fetch_all($get_query);
                            foreach ($result as $attendance) {
                        ?>
                                <tr>

                                    <td>
                                        <?php echo date('d-m-Y', strtotime($attendance[1])); ?>
                                    </td>
                                    <td>
                                        <?php echo date('h:i A', strtotime($attendance[2])); ?>
                                    </td>
                                    <td>
                                        <?php echo $attendance[3]; ?>
                                    </td>
                                    <td>
                                        <?php echo $attendance[4]; ?>
                                    </td>
                                    <td>
                                        <?php
                                        $attendance_status = "";
                                        $attendance_class = "";
                                        switch ($attendance[5]) {
                                            case 'P':
                                                $attendance_status = "Present";
                                                $attendance_class = "w-100 p-2 block text-white bg-success";
                                                break;
                                            case 'L':
                                                $attendance_status = "Late";
                                                $attendance_class = "w-100 p-2 block text-white bg-warning";
                                                break;
                                            case 'A':
                                                $attendance_status = "Absent";
                                                $attendance_class = "w-100 p-2 block text-white bg-danger";
                                                break;
                                            default:
                                                $attendance_status = "Absent";
                                                break;
                                        }; ?>
                                        <div class="<?php echo $attendance_class ?>"><?php echo $attendance_status ?></div>
                                    </td>

                                </tr>

                        <?php
                            }
                        }
                        ?>
                    </tbody>
                </table>
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