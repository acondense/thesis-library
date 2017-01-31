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
            <div class="col-md-12 text-center">
                <br /><br />
                <img src="../images/logo_ce.jpg" height="100px" />
                <h5 class="bold">PUPEE Thesis Library</h5>
            </div>        
        </div>

        <div class="row">
            <div class="col-md-3 col-md-offset-1">

                <form class="form-group" method="post" action="authenticate-admin-add.php">
                    <label for="Firstname">Firstname: </label>
                    <input type="text" name="fac_firstname" class="form-control" placeholder="firstname" />
                    
                    <br />
                    <label for="Firstname">Lastname: </label>
                    <input type="text" name="fac_lastname" class="form-control" placeholder="Lastname" />
                    
                    <br />
                    <label for="Firstname">Email: </label>
                    <input type="text" name="fac_email" class="form-control" placeholder="Email" />
                    
                    <br />
                    <label for="Firstname">Password: </label>
                    <input type="password" type="pasword" name="fac_password" class="form-control" placeholder="Password" />

                    <br />
                    <input type="submit" class="btn btn-block btn-info" value="Add Faculty" />
                </form>

            </div>
    
            <div class="col-md-7 col-md-offset-1">
                <h1 class="bold">Faculties</h1>
                <?php require('render-faculty.php'); ?>
            </div>


        </div>
    </div>


         
    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html> 