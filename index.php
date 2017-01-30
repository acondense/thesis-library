<?php 
	
	session_start();
	if (isset($_SESSION['role'])) {
		Header("Location: welcome.php");
	}

?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thesis Library</title>
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/flexboxgrid.css">
	<link rel="stylesheet" href="css/hover.css">
	<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/classes.css">
</head>
<body>

	<div class="row center-xs">

		<div class="col-xs-2">
	    	<div class="box" id="logo_container">
	    		<image src="./images/logo_ce.jpg" height="150px" />
	    	</div>
	    </div>

	    <div class="col-xs-10" id="left_side">
	        <div class="box">
	        	<div id="title_container">
	                <h1 id="index_title"">THESIS</h1>
	                <h2 id="index_title_library">L I B R A R Y</h2>
					<h3 id="index_slogan">Search for thesis</h3>
	        	</div>
	        </div>
	    </div>
	  
	</div>

	<div id="index_login_div">
		<div class="box">
	        <h1 class="text_on_blue">Log in to search for theses</h1>
	        <form method="post" action="authenticate-login.php">
	            <input id="email" name="login_email" class="basic_input" placeholder="Email" width="500px" />
	            <br />
	            <input id="password" type="password" name="login_password" class="basic_input" placeholder="Password" width="500px" />
	            <br />
	            <input id="login_btn" type="submit" value="Login" class="btn_on_blue" />
	            
	            <br />
	            <br />
	            <span class="text_on_blue">Didn't have an account? <a href="register.php">Register here</a></span>
	            
	        </form>
        </div>
        <br /><br /><br />
    </div>

	
	<div id="footer">
        <p class="footer_text">Polytechnic University of the Philippines | Electrical Engineering | 2017</p>
    </div>

</body>
</html>