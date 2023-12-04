<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mark Attendance</title>
    <?php
    require_once("../inc/head.php");
    ?>
    <style>
        .container {
            color: black;
            padding: 50px 50px 50px 50px;
            box-shadow: 0 0 50px 0 rgba(0, 0, 0, .1);
            max-width: 1000px;
            text-align: center;
            height: 60vh;
            margin-left: 600px;
            margin-top: 100px;
        }

        .order-form-label {
            margin: 8px 0 0 0;
            font-size: 14px;
            font-weight: bold;
        }

        .btn-submit:hover {
            background-color: #0D47A1 !important;
            color: black;
        }

        body {
            background-color: white;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        td,
        th {
            text-align: center;
        }

        td,
        th {
            padding: 12px;
        }

        .btn-primary {
            background-color: #003DB2;
        }

        .btn-primary:hover {
            background-color: #fff;
            color: black;
            border: 2px solid black;
        }
    </style>
</head>

<body>
    <?php
    require_once("../inc/navbar.php");
    ?>

    <?php
    require_once("../inc/admin_sidebar.php");
    ?>



    <!-- <div class="order-form m-4">
        <div class="container pt-4">
            <div class="row">
                <div class="col-12 px-4">
                    <h1 style="text-align: center;">COURSE DETAILS</h1>
                </div>
                <div>
                    <div>
                        <div>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">COURSE ID</th>
                                        <th scope="col">COURSE NAME</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require("../inc/connection.php");
                                    $sql = "SELECT * from course ";
                                    $execute = mysqli_query($conn, $sql);
                                    $final = mysqli_num_rows($execute);
                                    if ($final > 0) {
                                        while ($row = mysqli_fetch_array($execute)) {
                                            $course_name = $row['course_name'];
                                            $course_id = $row['course_id'];
                                            echo "<tr>
                                <form method='post' action='update_course.php'>
                                <td><input type='text' name='id' value='$course_id' size='1' style='text-align: center;' readonly>  </td>
                                <td><input type='text' name='fname' value='$course_name' style='text-align: center;'>  </td> 
                                <td><input type='submit' name='select'  class='btn btn-success' value='Select'>    </td> 
                                </form>
                                </tr>";
                                        }
                                    } else {
                                        echo "<script> The table is empty </script>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="order-form m-4">
        <div class="container pt-4">
            <div class="row">
                <div class="col-12 px-4">
                    <h1 style="text-align: center;">MODULE DETAILS</h1>
                </div>
                <div>
                    <div>
                        <div>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">MODULE ID</th>
                                        <th scope="col">MODULE NAME</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require("../inc/connection.php");
                                    $sql = "SELECT * from module ";
                                    $execute = mysqli_query($conn, $sql);
                                    $final = mysqli_num_rows($execute);
                                    if ($final > 0) {
                                        while ($row = mysqli_fetch_array($execute)) {
                                            $module_name = $row['module_name'];
                                            $module_id = $row['module_id'];
                                            echo "<tr>
                                            <form method='post' action='update_course.php'>
                                            <td><input type='text' name='id' value='$module_id' size='1' style='text-align: center;' readonly>  </td>
                                            <td><input type='text' name='fname' value='$module_name' style='text-align: center;'>  </td> 
                                            <td><input type='submit' name='select'  class='btn btn-success' value='Select'>    </td> 
                                            </form>
                                            </tr>";
                                        }
                                    } else {
                                        echo "<script> The table is empty </script>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->

    <div class="order-form m-4">
        <div class="container pt-4">
            <div class="row">
                <div class="col-12 px-4">
                    <h1 style="text-align: center;">STUDENT LIST</h1>
                </div>
                <div>
                    <div>
                        <div>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">STUDENT FIRST NAME</th>
                                        <th scope="col">STUDENT LAST NAME</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require("../inc/connection.php");
                                    $sql = "SELECT user_id, user_fname, user_lname from user where user_role_id=2";
                                    $execute = mysqli_query($conn, $sql);
                                    $final = mysqli_num_rows($execute);
                                    if ($final > 0) {
                                        while ($row = mysqli_fetch_array($execute)) {
                                            $stud_id = $row['user_id'];
                                            $fname = $row['user_fname'];
                                            $lname = $row['user_lname'];
                                            echo "<tr>
                                            <form method='post' action='mark_attendance.php'>
                                            <input type='hidden' name='stud_id' value='$stud_id'>
                                            <td>$fname</td>
                                            <td>$lname </td>
                                            <td><input type='submit' name='Present'  class='btn btn-success' value='Present'> <input type='submit' name='Late' class='btn btn-warning' value='Late'> <input type='submit' name='Absent' class='btn btn-danger' value='Absent'>  </td> 
                                            </form>
                                            </tr>";
                        
                                        }
                                    } else {
                                        echo "<script> The table is empty </script>";
                                    }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>