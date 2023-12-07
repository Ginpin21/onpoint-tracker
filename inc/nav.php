<!-- <?php
        session_start();
        ?> -->

<style>
    .navbar {
        padding: 10px;
        position: sticky;
        height: 10vh;
    }

    .navbar-nav .active a {
        font-weight: bold;
    }

    .vertical-line {
            border-left: 2px solid gainsboro; 
            height: 70px; 
            margin-left: 5px; 
            margin-right: 10px; 
    }
</style>

<?php
$currentPage = basename($_SERVER['PHP_SELF']);
if ($currentPage == 'index.php' || $currentPage == 'login.php') { ?>
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
else if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == TRUE) {
    $_SESSION['role_name'];
?>
    <nav class='navbar navbar-expand-lg navbar-light bg-light'>
        <a class='navbar-brand' href='index.php'>Onpoint Tracker</a>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <?php
        if ($_SESSION['role_name'] == 'Administrator') { ?>
            <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
                <ul class='navbar-nav ml-auto'>
                    <li class='nav-item " . ($currentPage == ' index.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='index.php'>Home</a>
                </li>
            </ul>
            <ul class='navbar-nav ml-auto'>
                <li class='nav-item " . ($currentPage==' admin_dashboard.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='admin_dashboard.php'><b>Admin Dashboard</b></a>
                </li>
            </ul>
            <div class="vertical-line"></div>
        </div>
        <div class='d-flex align-items-center gap-3'>
        <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
            <?php
            echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
            echo "<br>";
            echo $_SESSION['role_name'];
            ?>
            </span>
            <form class='form-inline'>
                <a href=" ../pages/logout.php" class="btn btn-danger">Logout</a>
                        </form>
            </div>
    </nav>
<?php
        } else if ($_SESSION['role_name'] == 'Student') { ?>
    <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
        <ul class='navbar-nav ml-auto'>
            <li class='nav-item " . ($currentPage == ' index.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='index.php'>Home</a>
                </li>
            </ul>
        <ul class='navbar-nav ml-auto'>
            <li class='nav-item " . ($currentPage==' student_dashboard.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='student_dashboard.php'><b>Student Dashboard</b></a>
                </li>
            </ul>
            <div class="vertical-line"></div>
        </div>
        <div class='d-flex align-items-center gap-3'>
        <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
            <?php
            echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
            echo "<br>";
            echo "<span style='padding-left:35px;'>" . $_SESSION['role_name'] . "</span>";
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
            <li class='nav-item " . ($currentPage == ' index.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='index.php'>Home</a>
                </li>
            </ul>
        <ul class='navbar-nav ml-auto'>
            <li class='nav-item " . ($currentPage==' teacher_dashboard.php' ? 'active' : '' ) . "'>
                    <a class='nav-link active' href='teacher_dashboard.php'><b>Teacher Dashboard</b></a>
                </li>
            </ul>
            <div class="vertical-line"></div>
        </div>
        <div class='d-flex align-items-center gap-3'>
        <i class="bi bi-person-circle" style="font-size: 2rem;"></i>
            <span class='navbar-text' style='color: #003DB2; font-weight: bold;'>
            <?php
            echo $_SESSION['first_name'] . ' ' . $_SESSION['last_name'];
            echo "<br>";
            echo "<span style='padding-left:12px;'>" . $_SESSION['role_name'] . "</span>";
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
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">