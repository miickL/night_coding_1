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