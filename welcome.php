<?php

    session_start();

    if (isset($_SESSION['role'])) {

    } else {
        Header("Location: index.php");
    }


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


    <br /><br /><br /><br /><br />

    <div class="row center-xs" id="content">
        <div class="col-xs-6">
            <div class="box">
                <h1 id="welcome_msg">Welcome, 

                <?php
                    echo $_SESSION['firstname'];
                ?>



                </h1>

                <h4>Search for thesis</h4>
                <form method="get" action="search.php">
                    <input id="main_search" name="query" placeholder="Search for ..." />
                    <br /><br />
                    <input id="main_btn" type="Submit" value="Search" />
                </form>


            </div>
        </div>
    </div>

    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>


</body>
</html>