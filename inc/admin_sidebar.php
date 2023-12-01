<style>
        .sidebar {
            height: 100vh;
            width: 25%;
            padding: 5px; 
            background-color: #003DB2;
            float:left;
            position: fixed;
        }

        .sidebar a {
            display: block;
            box-shadow: 1px 1px 2px rgba(0,0,0,0.5);
            padding: 8px 16px;
            text-align:center;
            background-color: #ffffff;
            color: #003DB2;
            border-radius: 10px;
            margin-bottom: 10px;
            border-style:solid;
            border-width:4px;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #e9ecef;
        }

    </style>
    <div class="sidebar">
        <a href="../pages/admin_dashboard.php">Home</a>
        <a href="../pages/registeration.php">Add New User</a>
        <a href="../pages/manage_users.php">Manage Users</a>
        <a href="../pages/admin_add_course.php">Add New Courses</a>
        <a href="../pages/admin_add_module.php">Add New Modules</a>
        <a href="">Manage Courses</a>
        <a href="">Mark Attendance</a>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>