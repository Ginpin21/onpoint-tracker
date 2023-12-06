<style>
    .navbar {
        padding: 10px;
        position: sticky;
    }

    .navbar-nav .active a {
        font-weight: bold;
    }
</style>
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