<?php 
    
    if (!isset($_SESSION))
        session_start();

    $_SESSION = [];
    session_destroy();

    Header("Location: ../index.php");

?>