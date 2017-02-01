<?php
    
    require('check-if-login-admin.php');
    require('../connection.php');

    $to_search = strtoupper($_GET['query']);

    $tokens = str_replace(" ", "|", $to_search);

    $query = "SELECT * FROM tblthesis
        WHERE upper(thesisTitle) REGEXP '$tokens'  
        OR upper(authors) REGEXP '$tokens'
        OR upper(datePublished) REGEXP '$tokens'
        OR upper(abstract) REGEXP '$tokens'";

    $results = mysqli_query($link, $query);
?>



<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Welcome to PUPEE Thesis Library</title>
    <link rel="stylesheet" href="../css/bootstrap.css" />
    <link rel="stylesheet" href="../css/style.css" />
</head>
<body>

    <div class="container-fluid">

        <div class="row">
            <div class="col-md-7 col-md-offset-2 text-center">
                <br /><br />
                <img src="../images/logo_ce.jpg" height="100px" />
                <h5 class="bold">PUPEE Thesis Library</h5>
            </div>
            <div class="col-md-3">
                <br /><br />
                <a href="dashboard.php" class="nav_a">Manage Faculties</a>
                <button class="btn btn-info" onClick='window.location="authenticate-admin-logout.php"'>Log out</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="box">
                    <br /><br />
                    <h1>Search results for "<?php echo $_GET['query']?>"
                    </h1>
                    <form method="get" action="search.php">
                        <input required class="form-control"  id="main_search" name="query" placeholder="Search for ..."
                            value=<?php echo "\"" .$_GET['query'] ."\"" ?>
                        />
                        <br />
                        <input class="btn btn-primary btn-lg" id="main_btn" type="Submit" value="Search" />
                    </form>
                </div>
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
                echo "<h1>No results found for \"" .$_GET['query'] ."\"</h1>";
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