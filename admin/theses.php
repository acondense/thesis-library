<?php

    // session_start();

    // if (isset($_SESSION['role'])) {

    // } else {
    //     Header("Location: index.php");
    // }
    // 
    require('check-if-login-admin.php');


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
                <br />
                <h1>Search for Theses to Manage </h1>
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