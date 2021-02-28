<form action="login.php" id="login-form" method="get">
    <div class="d-flex flex-column container-fluid w-50 p-3 border rounded form-x ">

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