<?php 
    
    if (!isset($_SESSION))
        session_start();

?>

<div class="row" id="nav_bar">
    <div class="col-md-3 text-right">
        <img class="center" src="images/logo_ce.jpg" width="100px" />
    </div>
    <div class="col-md-6">
        <h1>PUPEE Thesis Library</h1>
    </div>
    <div class="col-md-3 text-left">  
        <br />


        <?php

            $search_a = "<a class='nav_a' href='index.php'>Search</a>";

            $login_as_faculty_btn = 
                "<button class='btn btn-info' onClick='window.location=\"login.php\"'>Log in as Faculty</button>";

            $add_a = "<a class='nav_a' href='add.php'>Add</a>";
            $profile_a = "<a class='nav_a' href='profile.php'>Profile</a>";
            $logout_btn = "<button class='btn btn-info' onClick='window.location=\"utils/authenticate-logout.php\"'>Log out</button>";

            if (isset($_SESSION['id'])) {
                echo $search_a;
                echo $add_a;
                echo $profile_a;
                echo $logout_btn;
            } else {
                echo $search_a;
                echo $login_as_faculty_btn;
            }
        ?>

    </div>
</div>