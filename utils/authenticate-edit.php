<?php 
    require('../connection.php');

    echo print_r($_POST);

    if (!isset($_SESSION))
        session_start();

    $title    = $_POST['edit_title'];
    $authors  = $_POST['edit_authors'];
    $date     = $_POST['edit_date'];
    $abstract = $_POST['edit_abstract'];

    $thesisid = $_POST['thesisid'];

    $query = "UPDATE `tblthesis` SET 
    `thesisTitle`='$title',
    `authors`='$authors',
    `datePublished`='$date',
    `abstract`='$abstract'
    WHERE id='$thesisid'";

    if (mysqli_query($link, $query)) {
        header("Location: ../index.php");
        echo "SUCCESS";
    } else {
        // echo $_POST['password'];
        // echo mysqli_errno($link) . ": " . mysqli_error($link) . "\n";
        echo "FAIL";
    }
?>