<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Announcements</title>
    <?php
    require_once("../inc/head.php");
    ?>
    <style>
        @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap");

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }

        .container-5 {
            color: black;
            padding: 50px 50px 50px 50px;
            box-shadow: 0 0 50px 0 rgba(0, 0, 0, .1);
            max-width: 1100px;
            text-align: left;
            height: auto;
            margin: auto;
            margin-top: 50px;
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
            color: white;
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

        .container {
            padding-left: 25%;
        }
    </style>
</head>

<body>
    <?php
    require_once("../inc/nav.php");
    ?>

    <?php
    require_once('../pages/student_sidebar.php');
    ?>

    <?php
    session_start();
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
        if ($_SESSION["role_name"] == "Student") {
    ?>
            <main class="container">
                <section>
                    <h1 style="color:black;margin:10px 0;">Announcements</h1>
                    <?php
                    $select_query = "SELECT * FROM notification ORDER BY notification_id DESC";
                    $result = mysqli_query($conn, $select_query);
                    $notifications = mysqli_fetch_all($result);
                    foreach ($notifications as $notification) { ?>
                        <div class="alert alert-success" role="alert">
                            <h4 class="alert-heading"><?php echo "$notification[1]"; ?></h4>
                            <p><?php echo "$notification[2]"; ?></p>
                            <p><?php echo date("d/m/Y", strtotime($notification[3])); ?></p>
                        </div>
                    <?php
                    }
                    ?>
                </section>
        <?php
        } else {
            header("Location:index.php");
        }
    } else {
        header("Location:index.php");
    } ?>
            </main>

</body>

</html>