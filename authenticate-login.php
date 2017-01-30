<?php 

    require('connection.php');

    $email = $_POST['login_email'];
    $password = $_POST['login_password'];

    $query = "SELECT * FROM tblusers WHERE email='$email' AND password='$password' LIMIT 1";

    $result = mysqli_query($link, $query);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_array($result);
        // there are results in $result
        session_start();

        $_SESSION['email'] = $row['email'];
        $_SESSION['firstname'] = $row['firstname'];
        $_SESSION['lastname'] = $row['lastname'];
        $_SESSION['student_no'] = $row['student_no'];
        $_SESSION['role'] = $row['role'];

        echo "LOGIN SUCCESS";
        header("Location: welcome.php");
    } else {
        echo "LOGIN FAIL";
        header("Location: index.php"); // returns to login
    }










?>