<?php include 'includes/conn.php' ?>

<?php include "components/header.php" ?>
<?php
if(isset($_GET['authT']) ){
    include "views/panel_v.php";
} else {

    include "views/login_v.php";}
    
?>




<?php include "components/footer.php" ?>
