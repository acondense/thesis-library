<?php 
    require('connection.php');

    echo print_r($_POST);

    $title    = $_POST['add_title'];
    $authors  = $_POST['add_title'];
    $date     = $_POST['add_title'];
    $abstract = $_POST['add_title'];

    $query = "INSERT INTO `tblthesis`(
        `thesisTitle`, 
        `authors`, 
        `datePublished`, 
        `abstract`) VALUES 
        ('$title',
        '$authors',
        '$date',
        '$abstract')";

    if (mysqli_query($link, $query)) {
        header("Location: welcome.php");
        echo "SUCCESS";
    } else {
        // echo $_POST['password'];
        echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
        echo "FAIL";
    }
?>