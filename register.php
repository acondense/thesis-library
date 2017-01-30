<?php 
    
    if (isset($_SESSION['role'])) {
        Header("Location: index.php");
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register | Thesis Library</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/flexboxgrid.css">
    <link rel="stylesheet" href="css/hover.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/classes.css">
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
                <button class="nav_btn" onClick="window.location='index.php'">Log in</button>
            </div>
        </div>
    </div>
    <br /><br /><br />

    <div class="row center-xs">
        <div class="col-xs-6">
            <div class="box">

                <h1>Register to Thesis Library</h1>

                <form method="post" action="authenticate-register.php" id="reg_form">

                    <h6 class="label_reg">Email</h6>
                    <input id="email" name="reg_email" class="basic_input input_add" placeholder="Email" />
                    <br />
                    <h6 class="label_reg">Firstname</h6>
                    <input id="firstname" name="reg_firstname" class="basic_input input_add" placeholder="Firstname" />
                    <br />

                    <h6 class="label_reg">Lastname</h6>
                    <input id="lastname" name="reg_lastname" class="basic_input input_add" placeholder="Lastname" />
                    <br />
                    
                    <h6 class="label_reg">Student Number</h6>
                    <input id="student_number" name="reg_studno" class="basic_input input_add" placeholder="Student Number" />
                    <br />


                    <h6 class="label_reg">Password</h6>
                    <input id="password" type="password" name="reg_password" class="basic_input input_add" placeholder="Password" />
                    <br />
                    
                    <br />
                    <label class="label_reg">Register as: </label>
                    <input type="radio" class="reg_radio" name="reg_role" value="S"><span class="label_role">Student</span>
                    <input type="radio" class="reg_radio" name="reg_role" value="F"><span class="label_role">Faculty</span>

                    <br />

                    <input type="submit" id="add_submit" value="Register" />

                </form>
            </div>
        </div>
    </div>

    <br /><br /><br /><br /><br /><br />    
    <div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html>