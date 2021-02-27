<?php

$conn = new mysqli("localhost","root","","login_sys");

if($conn->connect_error){
    header("Location: 404.html");
}

$sql_query= "INSERT INTO login_sys.user_register (username, email, passwd, date_c) VALUES('', '', '', CURRENT_TIMESTAMP);";


?>