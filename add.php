<?php 
    require('utils/check-if-login.php');
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
                <h1>Add new Thesis</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <br />

                <form method="post" action="utils/authenticate-add.php">

                    <div class="form-group text-left">
                        <label for="formGroupExampleInput">Title</label>
                        <input type="text" class="form-control bold" name="add_title" placeholder="Title">
                    </div>

                    <div class="form-group text-left">
                        <label for="formGroupExampleInput">Authors</label>
                        <input type="text" class="form-control bold" name="add_authors" placeholder="Authors">
                    </div>

                    <div class="form-group text-left">
                        <label for="formGroupExampleInput">Date Published</label>   
                        <input type="text" class="form-control bold" name="add_date" placeholder="Date Published">
                    </div>

                    <div class="form-group text-left">
                        <label for="formGroupExampleInput">Abstract</label>
                        <textarea class="form-control" placeholder="Abstract" name="add_abstract" rows="10"></textarea>

                    </div>

                    
                    <button type="submit" class="btn btn-info btn-block">Add Thesis</button>
                    <br /><br /><br />
                </form>

                <br /><br /><br />
            </div>

        </div>
        
    
    
    </div>

    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html>