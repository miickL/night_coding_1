<?php

if (isset($_GET['username'])) {
    $username = $_GET['username'];
    $passwd = hash("sha512", $_GET['passwd-reg']);
    $email = $_GET['email-reg'];


    $sql_q = "INSERT INTO login_sys.user_register (username, email, passwd, date_c) VALUES('$username', '$email', '$passwd', CURRENT_TIMESTAMP);";

    $conn->query($sql_q);
    if ($conn->affected_rows > 0) {
        header("Location: index.php");
        $_SESSION['error'] = 001;
    }

    
}

?>
<form method="get" class="show-d" id="register-form">
    <div class="d-flex flex-column container-fluid w-50 p-3 border rounded form-x ">
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