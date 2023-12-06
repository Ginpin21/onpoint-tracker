<!DOCTYPE html>
<html lang="en">
<head>
<title>Teacher Dashboard</title>
    <?php
    require_once('..\inc\head.php');
    ?>
    <style>
        .dashboard-section {
            padding:10px;
            width:75%;
            float:right;
        }
    </style>
</head>
<body class="">
    <?php 
    require_once('../inc/teacher_navbar.php');
     ?>
     <main class="">
     <?php 
        require_once('..\inc\teacher_sidebar.php');
        ?>
        <section class="dashboard-section">
            <h1 class="text-center">Teacher Dashboard</h1>
        </section>
        
     </main>    
</body>
</html>