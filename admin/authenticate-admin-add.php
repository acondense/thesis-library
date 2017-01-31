<?php 
    require('../connection.php');

    echo print_r($_POST);

    if (!isset($_SESSION))
        session_start();

    $firstname = $_POST['fac_firstname'];
    $lastname = $_POST['fac_lastname'];
    $email = $_POST['fac_email'];
    $password = $_POST['fac_password'];


    $query = "INSERT INTO `tblusers`(
        `firstname`, 
        `lastname`, 
        `email`, 
        `password`,
        `role`) VALUES 
        ('$firstname',
        '$lastname',
        '$email',
        '$password',
        'F')";

    if (mysqli_query($link, $query)) {
        header("Location: dashboard.php");
        echo "SUCCESS";
    } else {
        // echo $_POST['password'];
        // echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
        echo "FAIL";
    }
?>