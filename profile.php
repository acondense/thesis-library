<?php

    require('connection.php');
    if (!isset($_SESSION))
        session_start();

    $userid = $_SESSION['id'];

    $query = "SELECT * FROM tblthesis WHERE userid='$userid'"; 

    $results = mysqli_query($link, $query);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to PUPEE Thesis Library</title>
    <link rel="stylesheet" href="css/bootstrap.css" />
    <link rel="stylesheet" href="css/style.css" />
</head>
<body>

    <div class="container-fluid">
        
        <?php require('components/nav-bar.php'); ?>

        <?php require('components/user-data.php'); ?>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h3>Your theses</h3>
            </div>
        </div>

         <?php 
            if (mysqli_num_rows($results) > 0) {
                while (($result = mysqli_fetch_array($results))) {
                    echo "<div class='row'>";
                    echo "<div class='col-md-6 col-md-offset-3'>";
                    echo "  <h2 class='search_result_title'><a href='thesis.php?id=" .$result['id'] ."'>" .$result['thesisTitle'] ."</a></h2>";
                    echo "  <p>By " .$result['authors'];
                    echo "  <br />";
                    echo "  Published on: " .$result['datePublished'] ."<p>";
                    echo "</div>";
                    echo "</div>";
                }
            } else {
                echo "<div class='row'>";
                echo "<div class='col-md-6 col-md-offset-3'>";
                echo "<h1>You don't have any uploaded thesis yet.</h1>";
                echo "</div>";
                echo "</div>";
            }
        ?>




    </div>

    <br /><br /><br />
    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html>