<?php 


    require('connection.php');
    session_start();

    if (isset($_SESSION['role'])) {

    } else {
        Header("Location: index.php");
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
    <title>Thesis Library</title>
    <link rel="stylesheet" href="css/flexboxgrid.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/classes.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>


    <div id="nav_bar" class="row between-xs end-xs">
        <div class="col-xs-0">
            <div class="box" id="nav_bar_title">
                THESIS Library
            </div>
        </div>
        <div class="col-xs-2">
            <div class="box">
                
            </div>
        </div>
        <div class="col-xs-4">
            <div class="box">
                <?php 
                    if ($_SESSION['role'] == 'F') {
                        echo "<button class='nav_btn' onClick='window.location=\"add.php\"'>Add new</button>";
                    } 
                ?>
                <button class="nav_btn" onClick="window.location='authenticate-logout.php'">Logout</button>
            </div>
        </div>
    </div>

    <br /><br /><br />

    <div class="row center-xs">

        <div id="thesis_detail" class="col-xs-6">
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

    <br /><br /><br /><br />
    

    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html>