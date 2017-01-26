<?php 
    require('connection.php');
    session_start();

    $id = $_GET['id'];

    $query = "SELECT * FROM tblthesis WHERE id='$id'";

    $results = mysqli_query($link, $query);

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Thesis Library</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flexboxgrid.css">
</head>
<body>


    <div id="nav_bar" class="row between-xs">
        <div class="col-xs-2">
            <div class="box">
                Home
            </div>
        </div>
        <div class="col-xs-2">
            <div class="box">
                Thesis Library
            </div>
        </div>
        <div class="col-xs-2">
            <div class="box">
                <button >
                Sign up
                </button>

                <button>Log in</button>
            </div>
        </div>
    </div>

    <div class="row center-xs">

        <div id="thesis_detail" class="col-xs-6">
            <?php
                if (mysqli_num_rows($results) > 0) {
                    $result = mysqli_fetch_array($results);

                    echo "<h1>" .$result['thesisTitle'] ."</h1>";
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

</body>
</html>