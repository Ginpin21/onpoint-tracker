<nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">Onpoint Tracker</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
            <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="index.php">Home</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'teacher_dashboard.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="teacher_dashboard.php">Teacher Dashboard</a>
                </li>
                <li class="nav-item <?php echo basename($_SERVER['PHP_SELF']) == 'login.php' ? 'active' : ''; ?>">
                    <a class="nav-link" href="login.php">Login</a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center gap-3">
            <span class="navbar-text" style="color: #003DB2; font-weight: bold;">
                <?php
                $currentUserFullName = "Iftakhar Ahmed";
                echo $currentUserFullName; // Replace this with the user's full name ?>
            </span>
            <form class="form-inline">
                <button class="btn btn-danger" type="submit">Logout</button>
            </form>
        </div>
    </div>
    </nav>

<style>
    .navbar {
        padding: 10px
    }
    .navbar-nav .active a {
        font-weight: bold;
    }
</style>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>