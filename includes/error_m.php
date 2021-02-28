<?php
function errorM(){

    $err_n = $_SESSION['error'];
    switch ($err_n) {
        case 001:
            alertDisplay("Usuario Registrado","success");
            session_unset();                        
            break;
        case 002:
            alertDisplay("Usuario No encontrado","warning");
            // header("Location: index.php");
            session_unset();
            break;
        default:
            break;
}
}
?>