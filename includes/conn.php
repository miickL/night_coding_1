<?php
session_start();
$conn = new mysqli("localhost","root","","login_sys");

if($conn->connect_error){
    header("Location: 404.html");
}


$sql_query= "INSERT INTO login_sys.user_register (username, email, passwd, date_c) VALUES('', '', '', CURRENT_TIMESTAMP);";



function alertDisplay($texto, $color)
{
    echo "<div class='mt-2 alert alert-$color alert-dismissible fade show text-center' role='alert'>";
    echo "<button type='button' class='close' data-dismiss='alert' aria-label='Close'>";
    echo "<span aria-hidden='true'>&times;</span></button>";
    echo "<strong>$texto</strong></div>";
}

?>