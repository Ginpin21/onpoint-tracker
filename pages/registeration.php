<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Screen</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../inc/registeration.css">
    <script src="../inc/script.js"></script>
</head>


<body>
    <div class="container-fluid">
        <?php require_once("../inc/navbar.php"); ?> <br> <br> <br>
    </div>

    <nav>
        <ul class="list-1">
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Home</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Add New User</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Manage Users</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Add New Course</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Manage Courses</button></a>
            </li>
            <li class="li-tag">
                <a href="" class="a-tag"><button type="button" class="btn btn-light a-tag">Mark Attendance</button></a>
            </li>
        </ul>
    </nav>

    <div class="container-1">

        <div class="reg-form">
            <form action="" id="registrationForm">
                <h1 id="heading">Registeration</h1>


                <div class="input-container">
                    <i class="bi bi-person-fill"></i>
                    <input type="text" name="" id="firstName" placeholder="First Name" autofocus>
                </div>

                <div class="input-container">
                    <i class="bi bi-person-fill"></i>
                    <input type="text" name="" id="lastName" placeholder="Last Name">
                </div>

                <div class="input-container">
                    <i class='bx bxs-envelope'></i>
                    <input type="email" name="" id="email" placeholder="Emaii ID">
                </div>

                <label for="">Select a Role: </label>
                <select name="" id="">
                    <option value="Teacher">Teacher</option>
                    <option value="Student">Student</option>
                </select>

                <div class="input-container">
                    <i class='bx bxs-lock-alt'></i>
                    <input type="password" name="" id="password" placeholder="Password">
                    <span class="password-icon">
                        <i class="bi bi-eye-slash-fill" id="eye" onclick="toggle()"></i>
                    </span>
                </div>
                
                <button type="submit" class="register-btn">Register</button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>