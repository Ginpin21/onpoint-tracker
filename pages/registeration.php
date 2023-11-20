<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registeration Screen</title>
    <link rel="stylesheet" href="/inc/registeration.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <script src="script.js"></script>
</head>

<body>
    
    <nav>
        <ul class="list-1">
            <li class="border">
                <a href="#" class="a-tag">home</a>
            </li>
            <li class="border">
                <a href="#">Edit user</a>
            </li>
            <li class="border">
                <a href="#">manage Users</a>
            </li>
            <li class="border">
                <a href="#">Add New Courses</a>
            </li>
            <li class="border">
                <a href="#">Manage Courses</a>
            </li>
            <li class="border">
                <a href="#">Mark Attendance</a>
            </li>
        </ul>
    </nav>

    <div class="container">

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous">
    </script>

</body>

</html>