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
            <div class="col-md-6 col-md-offset-3">
                <h1 class="bold">Log in as Faculty</h1>

                <form method="post" action="utils/authenticate-login.php">
                    <label for="login_email">Email: </label>
                    <input class="form-control" name="login_email" placeholder="Email" required/>

                    <br />
        
                    <label for="login_password">Password: </label>
                    <input class="form-control" type="password" name="login_password" placeholder="Password" required/>

                    <br />
                    <input type="submit" class="btn btn-block btn-info" value="Log in" />
                </form>
            </div>
        </div>
    </div>

         
    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html> 