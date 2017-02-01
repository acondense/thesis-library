<?php


    require('check-if-login-admin.php');
    require('../connection.php');

    $thesisid = $_GET['id'];
    $query = "SELECT * FROM tblthesis WHERE id='$thesisid'";
    $results = mysqli_query($link, $query);
    $result = mysqli_fetch_array($results);

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
                <h1>Edit Thesis</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center">
                <br />

                <form method="post" action="authenticate-edit.php">

                    <div class="form-group text-left">
                        <label for="formGroupExampleInput">Title</label>
                        <input required type="text" class="form-control bold" name="edit_title" placeholder="Title"
                            value=
                                <?php echo "\"" .$result['thesisTitle'] ."\""; ?>
                            >
                    </div>

                    <div class="form-group text-left">
                        <label for="formGroupExampleInput">Authors</label>
                        <input required type="text" class="form-control bold" name="edit_authors" placeholder="Authors"
                            value=
                                <?php echo "\"" .$result['authors'] ."\""; ?>
                            >
                    </div>

                    <div class="form-group text-left">
                        <label for="formGroupExampleInput">Date Published</label>   
                        <input required type="text" class="form-control bold" name="edit_date" placeholder="Date Published"
                            value=
                                <?php echo "\"" .$result['datePublished'] ."\""; ?>
                            >
                    </div>

                    <div class="form-group text-left">
                        <label for="formGroupExampleInput">Abstract</label>
                        <textarea required class="form-control" placeholder="Abstract" name="edit_abstract" rows="10"><?php echo $result['abstract']; ?>
                        </textarea>
                    </div>

                    <input hidden name="thesisid" value='<?php echo $thesisid; ?>' />
                    
                    <button type="submit" class="btn btn-info btn-block">Save</button>
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