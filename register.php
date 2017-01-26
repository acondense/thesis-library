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
    <div class="row center-xs">
        <div class="col-xs-6">
            <div class="box">

                <h1>Thesis Library</h1>

                <form method="post" action="authenticate-register.php">
                    <input id="email" name="reg_email" class="basic_input" placeholder="Email" />
                    <br />
                    <input id="firstname" name="reg_firstname" class="basic_input" placeholder="Firstname" />
                    <br />
                    <input id="lastname" name="reg_lastname" class="basic_input" placeholder="Lastname" />
                    <br />

                    <input id="student_number" name="reg_studno" class="basic_input" placeholder="Student Number" />
                    <br />

                    <input id="password" name="reg_password" class="basic_input" placeholder="Password" />
                    <br />

                    <select name="reg_role" class="basic_input" >
                      <option value="S">Student</option>
                      <option value="F">Faculty</option>
                    </select>

                    <br />


                    <input type="submit" />

                </form>
            </div>
        </div>
    </div>
</body>
</html>