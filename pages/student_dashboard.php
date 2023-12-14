<!DOCTYPE html>
<html lang="en">

<head>
    <?php
    require_once('..\inc\head.php');
    ?>
    <style>
        .dashboard-section {
            padding: 10px;
            width: 75%;
            float: right;

        }
    </style>
</head>

<body class="">
    <?php
    require_once('..\pages\student_nav.php');
    ?>
    <main class="">
        <?php
        require_once('..\pages\student_sidebar.php');
        ?>
        <section class="dashboard-section">
            <h1 class="text-center">Student Dashboard</h1>
        </section>

    </main>
</body>

</html>