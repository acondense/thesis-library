<?php 
    require('../connection.php');

    echo print_r($_POST);

    if (!isset($_SESSION))
        session_start();

    $title    = $_POST['add_title'];
    $authors  = $_POST['add_authors'];
    $date     = $_POST['add_date'];
    $abstract = $_POST['add_abstract'];
    $userid   = $_SESSION['id'];

    $query = "INSERT INTO `tblthesis`(
        `thesisTitle`, 
        `authors`, 
        `datePublished`, 
        `abstract`,
        `userid`) VALUES 
        ('$title',
        '$authors',
        '$date',
        '$abstract',
        '$userid')";

    if (mysqli_query($link, $query)) {
        header("Location: ../index.php");
        echo "SUCCESS";
    } else {
        // echo $_POST['password'];
        // echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
        echo "FAIL";
    }
?>