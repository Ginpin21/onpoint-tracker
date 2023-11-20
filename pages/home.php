<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Screen</title>
    <link rel="stylesheet" href="../inc/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .navbar {
            padding: 10px
        }

        .navbar-nav .active a {
            font-weight: bold;
        }

        .navbar-brand {
            font-size: 30px;
            font-weight: 600;
        }

        a {
            font-size: 23px;
            font-weight: 600;
        }

        button {
            padding: 10px 10px 10px 10px;
            margin-right: 10px;
        }
    </style>

</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Onpoint Tracker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li
                    class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'teacher_dashboard.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="teacher_dashboard.php">Teacher Dashboard</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'login_page.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="login_page.php">Login</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="navbar-text" style="color: #003DB2; font-weight: bold;">
                <?php
                $currentUserFullName = "Iftakhar Ahmed";
                echo $currentUserFullName; // Replace this with the user's full name 
                ?>
            </span>
            <form class="form-inline">
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </nav>


    <div class="container">
        <div class="headings">
            <h1>Welcome to Onpoint Tracker</h1>
            <h4>the only attendance management solution you need </h4>
            <h2>Built For</h2>
        </div>

        <div class="container-2">
            <div class="textboxes">
                <div class="textbox-1">
                    <h2>Students</h2>
                    <hr>
                    <ul>
                        <li>View Attendance History</li>
                        <li>View Classes</li>
                        <li>View Absent Notifications</li>
                    </ul>
                </div>
                <div class="textbox-2">
                    <h2>Teachers</h2>
                    <hr>
                    <ul>
                        <li>Mark and correct attendance</li>
                        <li>View their class and student list</li>
                        <li>Generate attendance report</li>
                    </ul>
                </div>
                <div class="textbox-3">
                    <h2>Admins</h2>
                    <hr>
                    <ul>
                        <li>Mark and correct attendance</li>
                        <li>Enroll new teachers and students</li>
                        <li>User Management</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-4"
            style="background-color: white; color:black; font-size: 20px; font-weight:600; box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); ">
            © 2023 Copyright:
            <a href="home.html" style="font-size: 20px; font: weight 600px; color:#003DB2; text-decoration:none">Onpoint
                Tracker.com</a>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>

</body>

</html>