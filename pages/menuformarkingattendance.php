<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="menuforamarkingattendance.css">

    <title>Menu for Marking Attendance</title>
</head>

<body>

    <div class="container">
        <table class="table table-striped table-hover table-bordered">
            <h2 class="text-center">Student Attendance</h2>
            <thead>
                <tr>
                    <th scope="col" class="text-center">Student ID</th>
                    <th scope="col" class="text-center">Student Name</th>
                    <th scope="col" class="text-center">Course</th>
                    <th scope="col" class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="text-center">1</th>
                    <td class="text-center">Mark</td>
                    <td class="text-center">Bsc Computing</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success btn-sm">Present</button>
                        <button type="button" class="btn btn-danger btn-sm">Absent</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">2</th>
                    <td class="text-center">Jacob</td>
                    <td class="text-center">Bsc Business Managment</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success btn-sm">Present</button>
                        <button type="button" class="btn btn-danger btn-sm">Absent</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">3</th>
                    <td class="text-center">Shawn</td>
                    <td class="text-center">BA Accountancy</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success btn-sm">Present</button>
                        <button type="button" class="btn btn-danger btn-sm">Absent</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <div class="container">
        <table class="table table-striped table-hover table-bordered">
            <h2 class="text-center">Teacher Attendance</h2>
            <thead>
                <tr>
                    <th scope="col" class="text-center">Teacher ID</th>
                    <th scope="col" class="text-center">Teacher Name</th>
                    <th scope="col" class="text-center">Course</th>
                    <th scope="col" class="text-center">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row" class="text-center">1</th>
                    <td class="text-center">Mr John</td>
                    <td class="text-center">Bsc Computing</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success btn-sm">Present</button>
                        <button type="button" class="btn btn-danger btn-sm">Absent</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">2</th>
                    <td class="text-center">Mr Steve</td>
                    <td class="text-center">Bsc Business Managment</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success btn-sm">Present</button>
                        <button type="button" class="btn btn-danger btn-sm">Absent</button>
                    </td>
                </tr>
                <tr>
                    <th scope="row" class="text-center">3</th>
                    <td class="text-center">Mr Smith</td>
                    <td class="text-center">BA Accountancy</td>
                    <td class="text-center">
                        <button type="button" class="btn btn-success btn-sm">Present</button>
                        <button type="button" class="btn btn-danger btn-sm">Absent</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>


</body>

</html>