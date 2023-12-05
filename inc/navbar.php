<style>
    .navbar {
        padding: 10px;
        position: sticky;
    }

    .navbar-nav .active a {
        font-weight: bold;
    }
</style>


<?php
session_start();
$_SESSION['role_id'];
if ($_SESSION['role_id'] == 1) {
    $currentPage = basename($_SERVER['PHP_SELF']);
    echo "Current Page: $currentPage";

    echo "
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class='navbar-brand' href='index.php'>Onpoint Tracker</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav ml-auto'>
                <li class='nav-item " . ($currentPage == 'index.php' ? 'active' : '') . "'>
                    <a class='nav-link' href='index.php'>Home</a>
                </li>
                <li class='nav-item " . ($currentPage == 'admin_dashboard.php' ? 'active' : '') . "'>
                    <a class='nav-link' href='admin_dashboard.php'>Admin Dashboard</a>
                </li>
            </ul>
        </div>
        <div class='d-flex align-items-center gap-3'>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
                " . $_SESSION['first_name'] . "&nbsp;" . $_SESSION['last_name'] . "<br>" . $_SESSION['email'] . "
            </span>
            <form class='form-inline'>
                <button class='btn btn-danger' type='submit'>Logout</button>
            </form>
        </div>
    </nav>
    ";
}
?>


<?php
$_SESSION['role_id'];
if ($_SESSION['role_id'] == 2) {
    $currentPage = basename($_SERVER['PHP_SELF']);
    echo "Current Page: $currentPage";

    echo "
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class='navbar-brand' href='index.php'>Onpoint Tracker</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav ml-auto'>
                <li class='nav-item " . ($currentPage == 'index.php' ? 'active' : '') . "'>
                    <a class='nav-link' href='index.php'>Home</a>
                </li>
                <li class='nav-item " . ($currentPage == 'student_dashboard.php' ? 'active' : '') . "'>
                    <a class='nav-link' href='student_dashboard.php'>Student Dashboard</a>
                </li>
            </ul>
        </div>
        <div class='d-flex align-items-center gap-3'>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
                " . $_SESSION['first_name'] . "&nbsp;" . $_SESSION['last_name'] . "<br>" . $_SESSION['email'] . "
            </span>
            <form class='form-inline' action=''>
                <button class='btn btn-danger' type='submit'>Logout</button>
            </form>
        </div>
    </nav>
    ";
}
?>


<?php
$_SESSION['role_id'];
if ($_SESSION['role_id'] == 3) {
    $currentPage = basename($_SERVER['PHP_SELF']);
    echo "Current Page: $currentPage";

    echo "
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class='navbar-brand' href='index.php'>Onpoint Tracker</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav ml-auto'>
                <li class='nav-item " . ($currentPage == 'index.php' ? 'active' : '') . "'>
                    <a class='nav-link' href='index.php'>Home</a>
                </li>
                <li class='nav-item " . ($currentPage == 'teacher_dashboard.php' ? 'active' : '') . "'>
                    <a class='nav-link' href='teacher_dashboard.php'>Teacher Dashboard</a>
                </li>
            </ul>
        </div>
        <div class='d-flex align-items-center gap-3'>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
                " . $_SESSION['first_name'] . "&nbsp;" . $_SESSION['last_name'] . "<br>" . $_SESSION['email'] . "
            </span>
            <form class='form-inline'>
                <button class='btn btn-danger' type='submit'>Logout</button>
            </form>
        </div>
    </nav>
    ";
}
?>



<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>