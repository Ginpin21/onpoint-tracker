<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once('../inc/head.php')
    ?>
    <style>
        .student_dashboard{
            width:85%;
            padding: 20px;
        }
        </style>
</head>
<body class="">
    <?php 
    require_once('..\inc\navbar.php');
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