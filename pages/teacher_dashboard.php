<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once('..\inc\head.php');
    ?>
    <style>
        .sidebar {
            width:25%;
            float:left;
        }
        .dashboard-section {
            padding:10px;
            width:75%;
            float:right;
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
            <h1 class="">Teacher Dashboard</h1>
        </section>
        
     </main>    
</body>
</html>