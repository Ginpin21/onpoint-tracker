<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Screen</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../inc/registeration.css">
    <script src="../inc/script.js"></script>
</head>


<body>
    <div class="container-fluid">
        <?php require_once("../inc/navbar.php"); ?> <br> <br> <br>
    </div>

    <nav>
        <ul class="list-1">
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Home</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Add New User</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Manage Users</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Add New Course</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Manage Courses</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Mark Attendance</button></a>
            </li>
        </ul>
    </nav>

    <div class="container-1">

        <div class="reg-form">
            <form action="regscript.php" id="registrationForm" method="post">
                <h1 id="heading">User Registeration</h1>

                <div class="flex-container">
                    <div class="input-container">
                        <label for="">User Firstname:</label>
                        <input type="text" name="firstName" id="firstName" placeholder="eg: First Name" autofocus>
                    </div>

                    <div class="input-container">
                        <label for="">User Lastname:</label>
                        <input type="text" name="lastName" id="lastName" placeholder="eg: Last Name">
                    </div>
                </div>

                <div class="input-container">
                    <label for="">User Email:</label>
                    <input type="email" name="email" id="email" placeholder="eg: abc@gmail.com" class="email-input">
                </div>


                <div class="flex-container-2">
                    <div class="input-container">
                        <label for="">User Password:</label>
                        <input type="password" name="password" id="password" placeholder="eg: ********">
                        <span class="password-icon">
                            <i class='bx bx-low-vision' id="eye" onclick="toggle()"></i>
                        </span>
                    </div>

                    <div class="input-container">
                        <label for="">Confirm Password:</label>
                        <input type="password" name="" id="confmpass" placeholder="eg: ********">
                        <span class="password-icon">
                            <i class='bx bx-low-vision' id="eye2" onclick="toggle2()"></i>
                        </span>
                    </div>
                </div>

                <label for="">User Role: </label>
                <select name="role" id="">
                    <?php
                    require("../inc/connection.php");
                    $qry = "Select * from role";
                    $execute = mysqli_query($conn, $qry);
                    $final = mysqli_num_rows($execute);
                    if ($final > 0) {
                        while ($row = mysqli_fetch_array($execute)) {
                            $id = $row['role_id'];
                            $name = $row['role_name'];
                            echo "<option value='$id'>$name</option>";
                        }
                    } else {
                        echo "<script> The table is empty </script>";
                    }
                    ?>
                </select>

                <label for="">User Course: </label>
                <select name="course" id="">
                    <?php
                    require("../inc/connection.php");
                    $qry = "Select course_id, course_name from course";
                    $execute = mysqli_query($conn, $qry);
                    $final = mysqli_num_rows($execute);
                    if ($final > 0) {
                        while ($row = mysqli_fetch_array($execute)) {
                            $id = $row['course_id'];
                            $name = $row['course_name'];
                            echo "<option value='$id'>$name</option>";
                        }
                    } else {
                        echo "<script> The table is empty </script>";
                    }
                    ?>
                </select>
                <button type="submit" class="register-btn" name="Register">Register User</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>