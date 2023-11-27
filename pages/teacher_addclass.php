<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Screen</title>
    <link rel="stylesheet" href="../inc/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require_once('..\inc\head.php'); ?>
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







        .container {
            padding-left: 300px;
        }
    </style>
</head>

<body>



    <?php require_once('..\inc\navbar.php'); ?>
    <?php require_once('..\inc\teacher_sidebar.php'); ?>

    <section class="container">

        <h1 class="mb-5">SWE 6202 Classes</h1>

        <h3>Create Class </h3>

        <div class="shadow px-5 py-3">
            <div class="row">
                <div class="col-6">
                    <div>
                        <label for="classname">Class Name</label><br>
                        <input class="box" placeholder="Topic taken in class / default: Module Name" type="text" id="classname">
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <label for="classname">Class Location</label><br>
                        <input class="box" placeholder="eg: Classroom 5/ Computer Lab 2" type="text" id="classname">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <div>
                        <label for="classname">Class Date</label><br>
                        <input class="box" placeholder="23/12/2023 (Default should be today’s date)" type="text" id="classname">
                    </div>
                </div>
                <div class="col-6">
                    <div>
                        <label for="classname">Class Time</label><br>
                        <input class="box" placeholder="09:30 AM (Default should be 09:30AM)" type="text" id="classname">

                    </div>
                </div>
            </div>

            <div class="row"> <button class="mt-5 btn btn-primary">Create Class</button></div>

        </div>
        <h3 class="mt-5">All Classes </h3>

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
                    <th scope="col">

                    </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>
                        06/12/2023
                    </td>
                    <td>
                        09:30 AM
                    </td>
                    <td>
                        SWE6202
                    </td>
                    <td>
                        Classroom 5
                    </td>
                    <td>
                        18/20
                    </td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                    </td>

                </tr>

                <tr>
                    <td>
                        05/12/2023
                    </td>
                    <td>
                        10:30 AM
                    </td>
                    <td>
                        Introduction
                    </td>
                    <td>
                        Classroom 2
                    </td>
                    <td>
                        20/20
                    </td>
                    <td>
                        <button class="btn btn-primary">Edit</button>
                    </td>

                </tr>


            </tbody>
        </table>







        <!-- <select name="course" id="course">
            <option value="course">Course</option>
            <option value="course1">Course1</option>
            <option value="course2">Course2</option>
            <option value="course3">Course3</option>
        </select> -->




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