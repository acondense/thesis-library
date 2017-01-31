<?php

    // session_start();

    // if (isset($_SESSION['role'])) {

    // } else {
    //     Header("Location: index.php");
    // }


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
            <div class="col-md-6 col-md-offset-3 text-center">
                <br />
                <h1>Welcome to PUPEE Thesis Library</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <br />
                <form method="get" action="search.php">
                  <div class="form-group">
                    <label for="formGroupExampleInput">Search for Thesis</label>
                    <input type="text" class="form-control bold" name="query" placeholder="Enter thesis title, author, date, keywords...">
                  </div>
                  <button type="submit" class="btn btn-info btn-block">Search</button>
                </form>
            </div>
        </div>
        

    </div>

    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html>