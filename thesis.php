<?php 


    require('connection.php');
    session_start();

    if (isset($_SESSION['role'])) {

    } else {
        // Header("Location: index.php");
    }

    $id = $_GET['id'];

    $query = "SELECT * FROM tblthesis WHERE id='$id'";

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

        <div class="row">

            <div class="col-md-6 col-md-offset-3">
                <?php
                    if (mysqli_num_rows($results) > 0) {
                        $result = mysqli_fetch_array($results);

                        echo "<h1 id='thesis_title'>" .$result['thesisTitle'] ."</h1>";
                        echo "<h3>Published on: " .$result['datePublished'] ."</h3>";
                        echo "<h4>By:</h4>";
                        echo "<h5>" .$result['authors'] ."</h5>";
                        echo "<h3>Abstract</h3>";
                        echo "<p id='abstract'>";
                        echo $result['abstract'];
                        echo "</p>";
                    }
                ?>
            </div>
        
        </div>

        <?php require('components/thesis-controls.php'); ?>

    </div>
    

    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html>