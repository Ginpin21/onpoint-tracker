<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Module</title>
    <link rel="stylesheet" href="home.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .container {
            padding-left: 310px;
            width: 100%;
        }

        .navbar {
            padding: 10px
        }

        .navbar-nav .active a {
            font-weight: bold;
        }

        .box {
            border-radius: 10px;
            height: 40px;
            width: 450px;
            padding-left: 10px;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <?php require_once('..\inc\navbar.php'); ?>
    </div>
    <?php require_once('..\inc\Student_sidebar.php'); ?>

    <section class="container">
        <h1>Your Modules</h1>
        <div class="grid mt-5">
            <div class="row gap-5">
                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1594729095022-e2f6d2eece9c?q=80&w=1171&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SWE6203 - Data Structures </h5>
                        <br>
                        <p class="card-text">Check Your Attendance</p>
                        <a href="../pages/view_attendance.php" class="btn btn-info">View Attendance</a>
                    </div>
                </div>

                <div class="card" style="width: 18rem;">
                    <img src="https://images.unsplash.com/photo-1616156027751-fc9a850fdc9b?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">SEC6202 - ERP </h5>
                        <br>
                        <p class="card-text">Check Your Attendance</p>
                        <a href="../pages/view_attendance.php" class="btn btn-info">View Attendance</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>