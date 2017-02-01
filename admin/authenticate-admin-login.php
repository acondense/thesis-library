<?php 

    require('../connection.php');

    $password = $_POST['login_password'];
    $email = $_POST['login_email'];



    $query = "SELECT * FROM tblusers WHERE password='$password' AND email='$email' AND role='A'";

    $results = mysqli_query($link, $query);

    if (mysqli_num_rows($results) > 0) {
        $result = mysqli_fetch_array($results);

        session_start();
        $_SESSION['id'] = $result['id'];
        $_SESSION['firstname'] = $result['firstname'];
        $_SESSION['lastname'] = $result['lastname'];
        $_SESSION['email'] = $result['email'];
        $_SESSION['role'] = $result['role'];

        Header("Location: dashboard.php");

    } else {
        Header("Location: index.php");
    }

    print_r($_SESSION);


?>