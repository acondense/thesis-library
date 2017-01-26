<?php
    require('connection.php');
    session_start();

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

    <div class="row start-xs">
        <div class="col-xs-6">
            <div class="box">
                <h1>Search result for "<?php echo $_GET['query']?>"
                </h1>
                
                <form method="get" action="search.php">
                    <input id="search_bar" name="query" />
                    <input type="submit" value="Submit" />
                </form>
            </div>
        </div>
    </div>

    <?php 
        if (mysqli_num_rows($results) > 0) {
            while (($result = mysqli_fetch_array($results))) {
                echo "<div id='search_result'>";
                echo "  <h2 id='search_result_title'><a href='thesis.php?id=" .$result['id'] ."'>" .$result['thesisTitle'] ."</a></h2>";
                echo "  <p>By " .$result['authors'];
                echo "  <br />";
                echo "  Published on: " .$result['datePublished'] ."<p>";
                echo "</div>";
            }
        }
    ?>

</body>
</html>