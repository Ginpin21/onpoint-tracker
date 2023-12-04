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
            padding: 50px 50px 50px 50px;
            box-shadow: 0 0 50px 0 rgba(0, 0, 0, .1);
            max-width: 1200px;
            text-align: center;
            height: 50vh;
            margin-left: 520px;
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

    <div class="order-form m-4">
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
                                        <th scope="col">ID</th>
                                        <th scope="col">COURSE NAME</th>
                                        <th scope="col">COURSE MANAGER ID</th>
                                        <th scope="col">COURSE MANAGER NAME</th>
                                        <th scope="col">ACTIONS</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    require("../inc/connection.php");
                                    $qry = "Select * from course_manager_name";
                                    $result = mysqli_query($conn, $qry);
                                    $final = mysqli_num_rows($result);
                                    if ($final > 0) {
                                        while ($row = mysqli_fetch_array($result)) {
                                            $id = $row['course_id'];
                                            $name = $row['course_name'];
                                            $manager_id = $row['course_manager_id'];
                                            $manager_name = $row['user_fname'];
                                            echo "<tr>
                                <form method='post' action='update_course.php'>
                                <td><input type='text' name='id' value='$id' size='1' style='text-align: center; border: none;' readonly></td>
                                <td><input type='text' name='fname' value='$name' style='text-align: center;'>  </td>
                                <td><input type='text' name='manager_id' value='$manager_id' style='text-align: center;'>  </td>
                                <td><input type='text' name='manager_name' value='$manager_name' style='text-align: center;'>  </td>
                                <td><input type='submit' name='update'  class='btn btn-primary' value='Update'> <input type='submit' name='delete' class='btn btn-danger' value='Delete'>   </td> 
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