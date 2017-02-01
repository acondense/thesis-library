<?php 

    if (!isset($_SESSION)) {
        session_start();
    }

    if (isset($_SESSION['id']) && isset($_SESSION['role']) && $_SESSION['role'] == 'A') {
        Header("Location: dashboard.php");
    }


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
            <div class="col-md-6 col-md-offset-3">
                <br />
                <div class="alert alert-danger" role="alert">
                  <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                  <span class="sr-only">Error:</span>
                  Warning! Unauthorized access of the admin pages is not allowed.
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <h1 class="bold">Log as Admin</h1>

                <form method="post" action="authenticate-admin-login.php">
                    <label for="login_email">Email: </label>
                    <input type="email" class="form-control" name="login_email" placeholder="Email" required/>

                    <br />
        
                    <label for="login_password">Password: </label>
                    <input class="form-control" type="password" name="login_password" placeholder="Password" required/>

                    <br />
                    <input type="submit" class="btn btn-block btn-info" value="Log in" />
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12 text-center">
                <br /><br />
                <img src="../images/logo_ce.jpg" height="100px" />
                <h5 class="bold">PUPEE Thesis Library</h5>
            </div>        
        </div>
    </div>


         
    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html> 