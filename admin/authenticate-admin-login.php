<?php 

    require('../connection.php');

    $password = $_POST['login_password'];
    $email = $_POST['login_email'];



    $query = "SELECT * FROM tblusers WHERE password='$password' AND email='$email'";

    $results = mysqli_query($link, $query);

    if (mysqli_fetch_array($results) > 0) {
        $result = mysqli_fetch_array($results);

        session_start();
        $_SESSION['id'] = $result['id'];
        $_SESSION['firstname'] = $result['firstname'];
        $_SESSION['lastname'] = $result['lastname'];
        $_SESSION['email'] = $result['email'];

        Header("Location: dashboard.php");

    } else {
        Header("Location: index.php");
    }


?>