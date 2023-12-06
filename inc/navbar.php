<?php
session_start();
?>

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
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == 'index.php') { ?>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class='navbar-brand' href='index.php'>Onpoint Tracker</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav ml-auto'>
                <li class='nav-item " . ($currentPage == ' index.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='index.php'>Home</a>
                </li>
            </ul>
        </div>
        <div class='d-flex align-items-center gap-3'>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
            </span>
            <form class='form-inline'>
                <a href=" ../pages/login.php" class="btn btn-success">Login</a>
                    </form>
        </div>
    </nav>
<?php
} elseif ($currentPage == 'login.php') {
?>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class='navbar-brand' href='index.php'>Onpoint Tracker</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav ml-auto'>
                <li class='nav-item " . ($currentPage == ' index.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='index.php'>Home</a>
                </li>
            </ul>
        </div>
        <div class='d-flex align-items-center gap-3'>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
            </span>
            <form class='form-inline'>
                <a href=" ../pages/login.php" class="btn btn-success">Login</a>
                    </form>
        </div>
    </nav>
<?php
}
?>

<?php
if ($_SESSION['logged_in'] == TRUE) {
    $_SESSION['name'];
?>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class='navbar-brand' href='index.php'>Onpoint Tracker</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav ml-auto'>
                <li class='nav-item " . ($currentPage == ' index.php' ? 'active' : '' ) . "'>
                        <a class='nav-link active' href='index.php'>Home</a>
                    </li>
                </ul>
            </div>
    <?php
    if ($_SESSION['name'] == 'Administrator') { ?>
        <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
            <ul class='navbar-nav ml-auto'>
                <li class='nav-item " . ($currentPage==' admin_dashboard.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='admin_dashboard.php'><b>Admin Dashboard</b></a>
                </li>
            </ul>
        </div>
        <div class='d-flex align-items-center gap-3'>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
            <?php
            echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
            echo "<br>";
            echo $_SESSION['email'];
            ?>
            </span>
            <form class='form-inline'>
                <a href=" ../pages/logout.php" class="btn btn-danger">Logout</a>
                    </form>
        </div>
    </nav>
<?php
    } else if ($_SESSION['name'] == 'Student') { ?>
    <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
        <ul class='navbar-nav ml-auto'>
            <li class='nav-item " . ($currentPage==' student_dashboard.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='student_dashboard.php'><b>Student Dashboard</b></a>
                </li>
            </ul>
        </div>
        <div class='d-flex align-items-center gap-3'>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
            <?php
            echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
            echo "<br>";
            echo $_SESSION['email'];
            ?>
            </span>
            <form class='form-inline'>
                <a href=" ../pages/logout.php" class="btn btn-danger">Logout</a>
                </form>
    </div>
    </nav>
<?php
    } else { ?>
    <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
        <ul class='navbar-nav ml-auto'>
            <li class='nav-item " . ($currentPage==' teacher_dashboard.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='teacher_dashboard.php'><b>Teacher Dashboard</b></a>
                </li>
            </ul>
        </div>
        <div class='d-flex align-items-center gap-3'>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
            <?php
            echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
            echo "<br>";
            echo $_SESSION['email'];
            ?>
            </span>
            <form class='form-inline'>
                <a href=" ../pages/logout.php" class="btn btn-danger">Logout</a>
                </form>
    </div>
    </nav>
<?php
    }
}
?>











<script src=" https://code.jquery.com/jquery-3.5.1.slim.min.js">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>