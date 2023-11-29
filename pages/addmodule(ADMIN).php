<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Module</title>
    <link rel="stylesheet" href="../inc/home.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php require_once('..\inc\head.php'); ?>
    <style>
        .navbar {
            padding: 10px
        }

        .navbar-nav .active a {
            font-weight: bold;
        }

        .name {
            background-color: #B3BFB8;

            display: flex;
            gap: 20px;
            padding: 10px;
            border-radius: 10px;
            margin-bottom: 10px;



        }

        .buttons {

            display: flex;
            gap: 10px;
            justify-content: center;






        }

        .button {
            border: none;

            border-radius: 10px;
            padding-left: 500px;
            padding-right: 500px;
            color: white;




        }

        h1{
            text-align: center;
        }

        .blue {
            background-color: #003DB2;




        }

        /* .red {
            background-color: #FF0000;

        }
        .yellow {
            background-color: yellow;
           
        } */
        .container {
            padding-left: 400px;

        }

        .textbox {
            padding-left: 200px;
            gap: 50px;
            margin-left: 200px;


        }

        .box {
            border: 2px solid;
            border-radius: 10px;
            padding-left: 5px;
            height: 40px;
            width: 350px;
        }

        .box2 {
            width: 100%;
        }

        .btn-primary{
            background-color: #003DB2;
        }
       
    </style>
</head>

<body>



    <?php require_once('..\inc\navbar.php'); ?>
    <?php require_once('..\inc\teacher_sidebar.php'); ?>

    <section class="container">

        <h1 class="mb-5">Add Module</h1>
        <form action="" method="post">
            <div class="row">
                <div>
                    <label for=""> Module name</label><br>
                    <input class="box box2" placeholder="eg: SWE6202 - Agile Programming" name="modulename">
                </div>
            </div>
            <div class="row mt-3">
                <div class="col">
                    <label for=""> Module Course </label> <br>
                    <select class="box">
                        <option value="Software Engineering"> Software Engineering </option>
                        <option value="Business Administration"> Business Administration </option>
                        <option value="Accounting"> Accounting </option>

                    </select>
                </div>
                <div class="col">
                    <label> Module Tutor </label> <br>
                    <select class="box box2">
                        <option value="Abdur Rahman"> Abdur Rahman </option>
                        <option value="Anina Nayyar"> Anina Nayyar </option>
                        <option value="Renuka Nyayadish"> Renuka Nyayadish </option>

                    </select>
                </div>
            </div>
            <div class="row mt-5">
                <button class="btn btn-primary">
                    Add Module
                </button>
            </div>
        </form>
    </section>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>