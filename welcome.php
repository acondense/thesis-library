<?php 
    session_start();
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flexboxgrid.css">
    <link rel="stylesheet" href="css/hover.css">
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
        <div class="col-xs-6">
            <div class="box">
                <h1>Welcome, 

                <?php
                    echo $_SESSION['firstname'];
                ?>



                </h1>

                <form method="get" action="search.php">
                    <input id="main_search" name="query"/>
                    <br />  
                    <input id="main_btn" type="Submit" value="Search" />
                </form>


            </div>
        </div>
    </div>
</body>
</html>