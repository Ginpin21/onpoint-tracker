<!-- student_attendance.php -->

<?php
require_once('db_onpoint-tracker.php'); // Replace with the actual filename for your database connection code

// Assuming you get the selected course ID from the student_menu page
$selectedCourseId = isset($_GET['course_id']) ? $_GET['course_id'] : 0;

// Fetch attendance data for the selected course
$attendanceQuery = "
    SELECT a.date, c.class_name, a.attendance_status
    FROM attendance a
    JOIN class c ON a.attendance_class_id = c.class_id
    WHERE a.attendance_student_id = :student_id
      AND c.class_module_id IN (SELECT module_id FROM module WHERE module_course_id = :course_id)";
$attendanceResult = $conn->prepare($attendanceQuery);
$attendanceResult->bindParam(':student_id', $studentId); // Replace with the actual student ID
$attendanceResult->bindParam(':course_id', $selectedCourseId);
$attendanceResult->execute();

// Function to get class name based on class ID
function getClassName($classId) {
    global $conn;
    $classNameQuery = "SELECT class_name FROM class WHERE class_id = :class_id";
    $classNameResult = $conn->prepare($classNameQuery);
    $classNameResult->bindParam(':class_id', $classId);
    $classNameResult->execute();
    $row = $classNameResult->fetch(PDO::FETCH_ASSOC);
    return $row ? $row['class_name'] : 'Unknown';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Include your custom CSS file if needed -->
    <title>Student Attendance</title>
</head>
<body>

<div class="container">
    <h2>Student Attendance</h2>

    <!-- Display attendance data here -->
    <table class="table">
        <thead>
        <tr>
            <th>Date</th>
            <th>Class Name</th>
            <th>Attendance Status</th>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $attendanceResult->fetch(PDO::FETCH_ASSOC)): ?>
            <tr>
                <td><?= $row['date']; ?></td>
                <td><?= $row['class_name']; ?></td>
                <td><?= $row['attendance_status']; ?></td>
            </tr>
        <?php endwhile; ?>
        </tbody>
    </table>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>