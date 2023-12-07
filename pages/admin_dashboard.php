<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
    require_once('../inc/head.php');
    ?>
    <style>
        .dashboard-section {
            padding: 10px;
            width: 75%;
            float: right;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    if (isset($_SESSION["logged_in"]) && $_SESSION["logged_in"]) {
        if ($_SESSION["role_name"] == "Administrator") {
    ?>
            <?php
            require_once('../inc/nav.php');
            ?>
            <?php
            require_once('../inc/admin_sidebar.php');
            ?>

            <section class="dashboard-section">
                <h1 class="text-center">Admin Dashboard</h1>
            </section>
    <?php
        } else {
            header("Location:index.php");
        }
    } else {
        header("Location:index.php");
    }
    ?>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</html>