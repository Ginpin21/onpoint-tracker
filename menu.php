<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Menu</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="menu.css">
</head>

<body>
    <nav>
        <ul>
            <li class="border">
                <a href="#">home</a>
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
        <p class="heading">Course Overview</p>
        <div class="courses">
            <div class="card" style="width: 25rem;">
                <img src="./art-7087003_640.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Ramesh Kumar | SWE4206</h5>
                  <p class="card-text">Agile Programming</p>
                  <a href="studentlist.html" class="btn">Student List</a>
                </div>
              </div>

              <div class="card" style="width: 25rem;">
                <img src="./pexels-pixabay-235985.jpg" class="card-img-top" alt="..." height="227px">
                <div class="card-body">
                  <h5 class="card-title">Ramesh Kumar | SWE4206 </h5>
                  <p class="card-text">Agile Programming</p>
                  <a href="studentlist.html" class="btn">Student List</a>
                </div>
              </div>

              <div class="card" style="width: 25rem;">
                <img src="./pexels-pixabay-268415.jpg" class="card-img-top" alt="..." height="227px">   
                <div class="card-body">
                  <h5 class="card-title">Ramesh Kumar | SWE4206</h5>
                  <p class="card-text">Agile Programming</p>
                  <a href="studentlist.html" class="btn">Student List</a>
                </div>
              </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>

</body>

</html>