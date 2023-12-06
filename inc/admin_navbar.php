<style>
    .navbar {
        padding: 10px;
        position: sticky;
    }

    .navbar-nav .active a {
        font-weight: bold;
    }
    .vertical-line {
        border-left: 2px solid #ccc; 
        height: 40px; 
        margin: 0 10px; 
    }
</style>
<nav class='navbar navbar-expand-lg navbar-light bg-light'>
    <a class='navbar-brand' href='index.php'>Onpoint Tracker</a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
        <ul class='navbar-nav ml-auto'>
            <li class='nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>'>
                <a class='nav-link' href='index.php'><b>Home</b></a>
            </li>
            <li class='nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'teacher_dashboard.php' ? 'active' : ''; ?>'>
                <a class='nav-link' href='admin_dashboard.php'><b>Admin Dashboard</b></a>
            </li>
            <p class="vertical-line"></p>
        </ul>
    </div>
    <div class='d-flex align-items-center gap-3'>
        <i class="bi bi-person-circle" style="font-size: 2em;"></i>
        <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
            <?php
            session_start();
            echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
            echo "<br>";
            echo $_SESSION['email'];
            ?>
        </span>
        <form class='form-inline' action="logout.php">
            <button class='btn btn-danger' type='submit'>Logout</button>
        </form>
    </div>
</nav>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">