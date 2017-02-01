<?php
    require('check-if-login.php');
    require('../connection.php');

    echo print_r($_POST);

    if (!isset($_SESSION))
        session_start();

    $thesisid = $_GET['id'];

    $query = "DELETE FROM tblthesis WHERE id='$thesisid'";

    if (mysqli_query($link, $query)) {
        header("Location: ../index.php");
        echo "SUCCESS";
    } else {
        // echo $_POST['password'];
        // echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
        echo "FAIL";
    }
?>