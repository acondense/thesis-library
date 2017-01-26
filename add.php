<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register | Thesis Library</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flexboxgrid.css">
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

                <h1>Add a new Thesis</h1>

                <form method="post" action="authenticate-add.php">
                    <input id="thesis_title" class="basic_input" name="add_title" placeholder="Title" />
                    <br />

                    <input id="thesis_authors" class="basic_input" name="add_authors" placeholder="Authors" />
                    <br />

                    <input id="thesis_date" class="basic_input" name="add_date" placeholder="Date Published" />
                    <br />

                    <input id="thesis_abstract" class="basic_input" name="add_abstract" placeholder="Abstract" />
                    <br />

                    <input type="submit" value="Add Thesis" />
                </form>
            </div>
        </div>
    </div>
</body>
</html>