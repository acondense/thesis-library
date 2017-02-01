<?php 

    require('check-if-login-admin.php');

    require('../connection.php');

    $userid = $_GET['id'];
    $query = "UPDATE tblusers SET status='INACTIVE' WHERE id='$userid'";

    $results = mysqli_query($link, $query);

    if (mysqli_num_rows($results) > 0) {

    } else {
        Header("Location: dashboard.php");
    }


?>