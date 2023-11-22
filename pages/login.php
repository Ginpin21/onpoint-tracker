<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login Screen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="login.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="./script.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>

<body>
    <?php
        require_once('..\inc\navbar.php');

    ?>

    <div class="container-fluid">
        <div class="form">
            <h1>Login</h1>
            <form action="">
                <div class="input-container">
                    <i class='bx bxs-user'></i> 
                    <input type="text" name="" id="username" placeholder="Username" autofocus><br>
                </div>
                <div class="input-container">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="" id="password" placeholder="Password" >
                    <span class="password-icon">
                        <i class="bi bi-eye-slash-fill" id="eye" onclick="toggle()"></i>
                    </span>
                </div>
                <button type="submit">Login</button>
                <p>Please contact the admin if you forgot your password</p>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>