<?php

    session_start();

    if (isset($_SESSION['role']) && $_SESSION['role'] == 'F') {

    } else {
        Header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add | Thesis Library</title>
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


    <div class="row center-xs">
        <div class="col-xs-6">
            <div class="box">

                <h1>Add a new Thesis</h1>

                <form method="post" action="authenticate-add.php" id="add_form">

                    <h6 class="label" for="add_title">Title</h6>
                    <input id="thesis_title" class="basic_input input_add" name="add_title" placeholder="Title" />
                    <br />

                    <h6 class="label" for="add_authors">Authors</h6>
                    <input id="thesis_authors" class="basic_input input_add" name="add_authors" placeholder="Authors" />
                    <br />
                    
                    <h6 class="label" for="add_date">Date</h6>
                    <input id="thesis_date" class="basic_input input_add" name="add_date" placeholder="Date Published" />
                    <br />

                    <h6 class="label" for="add_abstract">Abstract</h6> 
                    <textarea id="thesis_abstract" class="basic_input input_add" name="add_abstract" placeholder="Abstract"></textarea>
                    <br />

                    <input type="submit" id="add_submit" value="Add Thesis" />
                </form>
            </div>
        </div>
    </div>

    <br /><br /><br />

    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html>