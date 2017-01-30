<?php

    require('connection.php');
    session_start();

    if (isset($_SESSION['role'])) {

    } else {
        Header("Location: index.php");
    }

    $to_search = strtoupper($_GET['query']);

    $query = "SELECT * FROM tblthesis
        WHERE upper(thesisTitle) LIKE '%$to_search%'  
        OR upper(authors) LIKE '%$to_search%'
        OR upper(datePublished) LIKE '%$to_search%'
        OR upper(abstract) LIKE '%$to_search%'";

    $results = mysqli_query($link, $query);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
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

    <div class="row center-xs">
        <div class="col-xs">
            <div class="box">
                <br /><br />
                <h1>Search result for "<?php echo $_GET['query']?>"
                </h1>
                
                <form method="get" action="search.php">
                    <input id="main_search" name="query" placeholder="Search for ..." />
                    <br /><br />
                    <input id="main_btn" type="Submit" value="Search" />
                </form>
            </div>
        </div>
    </div>

    <br /><br /><br />    
    <?php 
        if (mysqli_num_rows($results) > 0) {
            while (($result = mysqli_fetch_array($results))) {
                echo "<div class='row center-xs'>";
                echo "<div class='search_result col-xs-6'>";
                echo "  <h2 class='search_result_title'><a href='thesis.php?id=" .$result['id'] ."'>" .$result['thesisTitle'] ."</a></h2>";
                echo "  <p>By " .$result['authors'];
                echo "  <br />";
                echo "  Published on: " .$result['datePublished'] ."<p>";
                echo "</div>";
                echo "</div>";
            }
        }
    ?>

    <br /><br /><br />
    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html>