<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manage Users</title>
    <?php
    require_once("../inc/head.php");
    ?>
    <style>
        .container {
            color: black;
            padding: 10px 10px 10px 10px;
            box-shadow: 0 0 50px 0 rgba(0, 0, 0, .1);
            max-width: 3000px;
            text-align: center;
            height: 60vh;
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
    </style>
</head>

<body>
    <?php
    require_once("../inc/navbar.php");
    ?>

    <!-- <?php
    require_once("../inc/admin_sidebar.php");
    ?> -->

    <div class="order-form m-4">
        <div class="container pt-4">
            <div class="row">
                <div class="col-12 px-4">
                    <h1 style="text-align: center;">USER DETAILS</h1>
                </div>
                <div>
                    <div>
                        <div>
                            <table class="table table-striped table-hover table-bordered">
                                <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">FNAME</th>
                                        <th scope="col">LNAME</th>
                                        <th scope="col">EMAIL</th>
                                        <th scope="col">PASSWORD</th>
                                        <th scope="col">ROLE ID</th>
                                        <th scope="col">COURSE ID</th>
                                        <th scope="col">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require("../inc/connection.php");
                                    $qry = "Select * from user";
                                    $result = mysqli_query($conn, $qry);
                                    $final = mysqli_num_rows($result);
                                    if ($final > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['user_id'];
                                            $fname = $row['user_fname'];
                                            $lname = $row['user_lname'];
                                            $email = $row['user_email'];
                                            $pass = $row['user_password'];
                                            $role_id = $row['user_role_id'];
                                            $course_id = $row['user_course_id'];
                                            echo "<tr>
                                <form method='post' action='update_user.php'>
                                <td><input type='text' name='id' value='$id' size='1' style='text-align: center;' readonly>  </td>
                                <td><input type='text' name='fname' value='$fname' style='text-align: center;'>  </td>
                                <td><input type='text' name='lname' value='$lname' style='text-align: center;'>  </td>
                                <td><input type='text' name='email' value='$email' size='35' style='text-align: center;'>  </td>
                                <td><input type='text' name='pass' value='$pass' size='35' style='text-align: center;'>  </td>
                                <td><input type='text' name='role_id' value='$role_id' size='6' style='text-align: center;'>  </td>
                                <td><input type='text' name='course_id' value='$course_id' size='6' style='text-align: center;'>  </td>
                                <td><input type='submit' name='update'  class='btn btn-success' value='Update'>  </td> 
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