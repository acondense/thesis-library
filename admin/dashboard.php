<?php require('check-if-login-admin.php'); ?>

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
                <a href="theses.php" class="nav_a">Manage Theses</a>
                <button class="btn btn-info" onClick='window.location="authenticate-admin-logout.php"'>Log out</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3 col-md-offset-1">

                <form class="form-group" method="post" action="authenticate-admin-add.php">
                    <label for="Firstname">Firstname: </label>
                    <input type="text" name="fac_firstname" class="form-control" placeholder="firstname" required/>
                    
                    <br />
                    <label for="Firstname">Lastname: </label>
                    <input type="text" name="fac_lastname" class="form-control" placeholder="Lastname" required/>
                    
                    <br />
                    <label for="Firstname">Email: </label>
                    <input type="email" name="fac_email" class="form-control" placeholder="Email" required/>
                    
                    <br />
                    <label for="Firstname">Password: </label>
                    <input type="password" type="pasword" name="fac_password" class="form-control" placeholder="Password" required/>

                    <br />
                    <input type="submit" class="btn btn-block btn-info" value="Add Faculty" />
                </form>

            </div>
    
            <div class="col-md-6 col-md-offset-1">
                <h1 class="bold">Faculties</h1>
                <?php require('render-faculty.php'); ?>
            </div>


        </div>
    </div>


    <br /><br /><br />
         
    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html> 