<?php include 'includes/conn.php' ?>

<!doctype html>
<html lang="en">

<head>
    <title>Login SYS</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>


    <div class="d-flex flex-column container-fluid w-50 p-2 border mt-4 mb-2">
        <h3 class="text-center mt-2 title">BRAND NAME</h3>
        <div class="h-25 mx-auto">
            <img id="img-card" class="mx-auto w-100 transform img-fluid" src="./img-perf.png" alt="">
        </div>

    </div>
    <ul id="list-nav" class="nav justify-content-center">
        <li class="nav-item">
            <a id="nav-login" class="nav-link disabled" onclick="changeTop(this)" href="#" value="login">Login</a>
        </li>
        <li class="nav-item">
            <a id="nav-register" class="nav-link login " onclick="changeTop(this)" href="#">Register</a>
        </li>
    </ul>

    <form action="login.php" id="login-form" method="get">
        <div class="d-flex flex-column container-fluid w-50 p-3 border rounded ">

            <div class="form-group">
                <label for="">Email <i class="fa fa-grav" aria-hidden="true"></i></label>
                <input type="email-log" class="form-control" name="email-log" id="email-log" aria-describedby="emailHelpId" placeholder="" autofocus>
                <!-- <small id="emailHelpId" class="form-text text-muted">Tiene que ser una dirección valida</small> -->
            </div>
            <div class="form-group">
                <label for="">Password <i class="fa fa-asterisk" aria-hidden="true"></i></label>
                <input type="password" class="form-control" name="passwd-log" id="passwd-log" placeholder="">
            </div>
            <button style="margin-bottom: 1rem;" type="submit" class="btn btn-primary">Login</button>

            <?php

            function alertDisplay($texto, $color)
            {
                echo "<div class='alert alert-$color alert-dismissible fade show' role='alert'>";
                echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
                echo "<span aria-hidden='true'>&times;</span></button>";
                echo "<strong>$texto</strong></div>";
            }


            ?>

        </div>


    </form>



    <form method="get" class="show-d" id="register-form">
        <div class="d-flex flex-column container-fluid w-50 p-3 border rounded  ">
            <div class="form-group">
                <label for="username">Username <i class="fa fa-user" aria-hidden="true"></i></label>
                <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">
                <!-- <small id="helpId" class="form-text text-muted">Username</small> -->
            </div>
            <div class="form-group">
                <label for="">Email <i class="fa fa-grav" aria-hidden="true"></i></label>
                <input type="email-reg" class="form-control" name="email-reg" id="email-reg" aria-describedby="emailHelpId" placeholder="">
                <!-- <small id="emailHelpId" class="form-text text-muted">Tiene que ser una dirección valida</small> -->
            </div>
            <div class="form-group">
                <label for="">Password <i class="fa fa-asterisk" aria-hidden="true"></i></label>
                <input type="password" class="form-control" name="passwd-reg" id="passwd-reg" placeholder="">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </div>
    </form>


    <footer class="bg-light text-center text-lg-start w-100">
        <div class="text-center p-1" style="background-color: rgba(0, 0, 0, 0.2);">
        
            <a class="link-dark" href="https://github.com/miickL"><i class="fa fa-github"></i>miickL</a>
        </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="./form_logic.js"></script>
</body>

</html>