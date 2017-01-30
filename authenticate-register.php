<?php 
    require('connection.php');

    echo print_r($_POST);

    $email = $_POST['reg_email'];
    $password = $_POST['reg_password'];
    $firstname = $_POST['reg_firstname'];
    $lastname = $_POST['reg_lastname'];
    $student_no = $_POST['reg_studno'];
    $role = $_POST['reg_role'];

    $query = "INSERT INTO `tblusers`(
        `email`,
        `password`, 
        `role`, 
        `firstname`, 
        `lastname`, 
        `student_no`) VALUES 
        ('$email',
        '$password',
        '$role',
        '$firstname',
        '$lastname',
        '$student_no')";

    if (mysqli_query($link, $query)) {
        header("Location: welcome.php");
        echo "SUCCESS";
    } else {
        // echo $_POST['password'];
        echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
        echo "FAIL";
    }






?>