<?php
if (isset($_GET['email-log'])) {
    $email = $_GET['email-log'];
    $sql_query = "SELECT id_user, username, email, passwd, date_c FROM login_sys.user_register WHERE email='$email';";
    $conn->query($sql_query);
    echo ($conn->error);
    if ($conn->affected_rows > 0) {
        header("Location: index.php?authT=1234");
        die;
    } else {
        $_SESSION['error'] = 002;
    }
}
?>
<form id="login-form" method="get">
    <div class="d-flex flex-column container-fluid w-50 p-3 border rounded form-x ">
        <ul class="d-flex flex-row nav justify-content-center">
            <ul id="login-nav" class="nav nav-tabs nav-stacked mb-2">
                <li class="nav-item">
                    <a href="#" class="nav-link active">UserM</a>
                </li>

                <li class="nav-item ">
                    <a href="#" class="nav-link">Token</a>
                </li>
            </ul>

        </ul>
        <div id="common">
            <div class="form-group">
                <label for="">Email <i class="fa fa-grav" aria-hidden="true"></i></label>
                <input type="email" class="form-control" name="email-log" id="email-log" aria-describedby="emailHelpId" placeholder="" autofocus>
                <!-- <small id="emailHelpId" class="form-text text-muted">Tiene que ser una dirección valida</small> -->
            </div>
            <div class="form-group">
                <label for="">Password <i class="fa fa-asterisk" aria-hidden="true"></i></label>
                <input type="password" class="form-control" name="passwd-log" id="passwd-log" placeholder="">
            </div>

        </div>
        <div class="show-d" id="token">
            <div class="form-group">
                <label for="">Token <i class="fa fa-key" aria-hidden="true"></i></label>
                <input type="text" class="form-control" name="" id="" aria-describedby="helpId" placeholder="Token">
                <small id="helpId" class="form-text text-muted">if(error) -> contact . <a href="mailto:">administrator</a> </small>
            </div>
        </div>
        <button style="margin-bottom: 1rem;" type="submit" class="btn btn-primary">Login</button>


        <?php if (isset($_SESSION['error'])) {require 'includes/error_m.php';errorM();}?>

    </div>


</form>