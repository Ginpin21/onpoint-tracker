<!DOCTYPE html>
<html lang="en">
<head>
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
    require_once('..\inc\navbar.php');
     ?>
     <main class="">
     <?php 
        require_once('..\inc\teacher_sidebar.php');
        ?>
        <section class="dashboard-section">
            <h1 class="text-center">Mark Attendance</h1>
            <div class="card">
                <ul class="list-group list-group-flush">
                <?php
                    $classes_query = "SELECT * from course";
                    $query = mysqli_query($conn,$classes_query);
                    if($query){
                        $result = mysqli_fetch_all($query);
                    }
                    foreach ($result as $row){?>
                <li class="list-group-item"><?php echo "$row[0].$row[1]"?></li>
                <?php
                    }
                ?>
                </ul>
            </div>
            
        </section>
        
     </main>    
</body>
</html>