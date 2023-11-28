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

        .buttons {

            display: flex;
            gap: 10px;
            justify-content: center;






        }

        .button {
            border: none;

            border-radius: 10px;
            padding-left: 500px;
            padding-right: 500px;
            color: white;




        }

        .blue {
            background-color: #003DB2;




        }

        /* .red {
            background-color: #FF0000;

        }
        .yellow {
            background-color: yellow;
           
        } */
        .container {
            padding-left: 300px;

        }

        .textbox {
            padding-left: 200px;
            gap: 50px;
            margin-left: 200px;


        }
    </style>
</head>

<body>



    <?php require_once('..\inc\navbar.php'); ?>
    <?php require_once('..\inc\teacher_sidebar.php'); ?>

    <section class="container">

        <h1 class="mb-5">Add Course</h1>






        <div>
            <h5>Course Manager</h5>
            <select name="coursemanager" id="coursemanager">
                <option value="coursemanager">Course Manager</option>
                <option value="course1">Renuka</option>
                <option value="course2">Abdulrehman</option>
                <option value="course3">Rehna</option>
                <?php
                require("./connection.php");
                $qry = "Select fname, lname from user where user_role_id=100";
                $execute = mysqli_query($conn, $qry);
                $final = mysqli_num_rows($execute);
                if ($final > 0) {
                    while ($row = mysqli_fetch_array($execute)) {
                        $fname = $row['user_fname'];
                        $lname = $row['user_lname'];
                        echo "<option value='$name'>$fname $lname</option>";
                    }
                } else {
                    echo "<script> The table is empty </script>";
                }
                ?>
            </select>

            <!-- <div class= "mt-5">
            <div class="row">
                <div class="col-4">
                    <div class="name">
                        <h5>1.</h5>
                        <h5>Nihaal</h5> -->

            <!-- <input type="radio" id="html" name="fav_language" value="HTML">
<label for="html">Present</label><br>
<input type="radio" id="css" name="fav_language" value="CSS">
<label for="css">Absent</label><br>
<input type="radio" id="javascript" name="fav_language" value="JavaScript">
<label for="javascript">JavaScript</label> -->


            <input class="textbox col-7" type="text" id="name" name="name"><br><br>

        </div>
        <div class="buttons">

            <button class="mt-5 blue button">Add Course</button>
            <!-- <button class="red button">Absent</button>
                        <button class="yellow button">Late</button> -->

        </div>

        <!-- </div>
                <div class="col-4">
                    <div class="name">
                        <h5>2.</h5>
                        <h5>Ayesha</h5>

                    </div>

                    <div class="buttons">

                        <button class="green button">present</button>
                        <button class="red button">Absent</button>
                        <button class="yellow button">Late</button>
                    </div>

                </div>
                <div class="col-4">
                    <div class="name">
                        <h5>3.</h5>
                        <h5>Hamza</h5>

                    </div>

                    <div class="buttons">

                        <button class="green button">present</button>
                        <button class="red button">Absent</button>
                        <button class="yellow button">Late</button>
                    </div>

                </div>
            </div>
            <div class="row mt-5">
                <div class="col-4">
                    <div class="name">
                        <h5>4.</h5>
                        <h5>Kashif</h5>

                    </div>

                    <div class="buttons">

                        <button class="green button">present</button>
                        <button class="red button">Absent</button>
                        <button class="yellow button">Late</button>
                    </div>

                </div>
            </div>
        </div> -->


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