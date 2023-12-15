</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Course</title>
    <link rel="stylesheet" href="../inc/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
    require_once('../inc/head.php');
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

        .btn-primary:hover {
            background-color: #004ED2 !important;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
        }

        .container {
            padding-left: 300px;
        }

        h1 {
            text-align: center;
        }

        .card {
            display: flex;
            flex-direction: column;
            height: 100%;
        }

        .card-body {
            flex: 1;
        }

        .btn-primary {
            margin-top: auto;
        }
        .container-fluid{
            top: 0;
            position: fixed;
            z-index: 1000;
        }
    </style>
</head>

<body>
    <?php require_once('../inc/nav.php'); ?>
    <?php require_once('../pages/student_sidebar.php');
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
        if ($_SESSION["role_name"] == "Student") { ?>
            <section class="container">
                <h1 class="mb-5">List of Modules Attendance</h1>
                <div class="grid mt-5">
                    <?php
                    $tutor_id = $_SESSION["user_id"];
                    $select_query = "SELECT module_id,module_name,user_fname,user_lname,course_name 
                    FROM module,user,course 
                    where user.user_id=module.module_tutor_id 
                    and module.module_course_id=course.course_id";
                    $get_query = mysqli_query($conn, $select_query);

                    if ($get_query) {
                        $result = mysqli_fetch_all($get_query);
                        foreach ($result as $module) { ?>
                            <div class="card" style="min-width: 20rem;">
                                <img src="https://images.unsplash.com/photo-1594729095022-e2f6d2eece9c?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?php echo "$module[1] " ?></h5>
                                    <p class="card-subtitle"><b>Tutor: </b><?php echo "$module[2] $module[3]" ?></p>
                                    <p class="card-text"><b>Course: </b><?php echo "$module[4]" ?></p>
                                    <a href="student_class.php?module_id=<?php echo $module[0]; ?>" class="btn btn-primary">View class</a>
                                </div>
                            </div>
            <?php
                        }
                    }
                } else {
                    header("Location:index.php");
                }
            } else {
                header("Location:index.php");
            }
            ?>
                </div>
            </section>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
            </script>

</body>

</html>