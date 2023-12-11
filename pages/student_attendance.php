<?php
// Include your database connection file
include('onpoint-tracker');

// Replace with the actual student ID (you need to get this from the logged-in user)
$attendanceId = 1;

// Replace with the actual course ID for Agile Programming
$courseId = 1;

// Fetch attendance for the specified course
$attendanceQuery = "SELECT * FROM attendance WHERE attendance_student_id = :student_id AND attendance_class_id = :course_id";
$attendanceResult = $pdo->prepare($attendanceQuery);
$attendanceResult->bindParam(':attendance_id', $attendanceId);
$attendanceResult->bindParam(':course_id', $courseId);
$attendanceResult->execute();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Add your head content here -->
</head>

<body>
    <?php require_once('../pages/student_navbar.php'); ?>
    <?php require_once('../pages/student_sidebar.php'); ?>

    <section class="container">
        <h1>Attendance</h1>

        <!-- Display attendance for Agile Programming -->
        <div class="card col text-center" style="width: 18rem;">
            <img src="https://www.krasamo.com/wp-content/uploads/agile-01-scaled.jpeg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Agile</h5>
                <p class="card-text">SWE 6202 - Agile Programming.</p>
                <!-- Display attendance data -->
                <ul>
                    <?php while ($row = $attendanceResult->fetch(PDO::FETCH_ASSOC)) : ?>
                        <li><?= $row['attendance_status'] . ' - ' . $row['attendance_date']; ?></li>
                    <?php endwhile; ?>
                </ul>
            </div>
        </div>
    </section>

    <footer class="bg-light text-center text-lg-start">
        <!-- Add your footer content here -->
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>