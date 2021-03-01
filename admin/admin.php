<?php include "../components/header.php";?>


<div class="container-fluid bg-secondary p-4 w-50 mx-auto text-center mt-">
<div class="form-group">
  <label class="text-light font-weight-bold " for="email-ad">EMAIL</label>
  <input type="email" class="form-control " name="email-ad" id="email-ad" aria-describedby="emailHelpId" placeholder="email@email.com">
  <small id="emailHelpId" class="form-text text-secondary ">humptyD</small>
</div>
<div class="form-group text-light font-weight-bold">
  <label for="pass">PASS</label>
  <input type="password" class="form-control" name="pass" id="pass" placeholder="****************">
</div>
<button type="submit" class="btn btn-warning w-100 mt-5">Enter</button>


<?php include "../components/footer.php";?>