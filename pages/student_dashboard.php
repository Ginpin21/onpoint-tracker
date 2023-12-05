<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    require_once('../inc/head.php')
    ?> 
</head>
<body class="">
    <?php 
        require_once('..\inc\navbar.php');
     ?>
     <main class="">
     <div style="width: 125%; 
                height: 100%; 
                text-align: center; 
                color: black; 
                font-size: 50px; 
                font-family: 'Poppins', sans-serif; 
                font-weight: bold; 
                ">Student Dashboard</div>
     <?php 
        require_once('..\inc\Student_sidebar.php');
        ?>
     </main>    
</body>
</html>