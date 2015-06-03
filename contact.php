<html>
<head>
		<!-- bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<!-- google fonts -->
		<link href='http://fonts.googleapis.com/css?family=Shojumaru' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Oswald' rel='stylesheet' type='text/css'>
		<link href='http://fonts.googleapis.com/css?family=Merriweather' rel='stylesheet' type='text/css'>
		<!-- Stylesheets -->
		<link rel="stylesheet" type="text/css" href="css/main.css">
		<!-- mediaquery -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Blake's Landing Page</title>
</head>
<body class="background">
	<div class="container">
		<div class="row title jumbotron font">
			<h1>Blake's Landing Page</h1>
			<nav>
				<ul class="nav nav-pills">
            		<li role="presentation" class="active"><a href="index.html">Home</a></li>           
            		<li role="presentation" class="active"><a href="skill.html">Skills</a></li>
            		<li role="presentation" class="active"><a href="project.html">Projects</a></li>
            		<li role="presentation" class="active"><a href="resume.html">Resume</a></li>
            		<li role="presentation" class="active"><a href="contact.php">Contact</a></li>
					<a href="https://www.facebook.com">
  						<div class="button">
    						<img src="http://www.bryce-snyder.com/hosted/color/Facebook.png" height="50" width="50" alt="" />
  						</div><!--end of button-->
  					</a>
					<a href="https://github.com/zombieman1041">
  						<div class="button">
    						<img src="http://www.bryce-snyder.com/hosted/color/Github.png" height="50" width="50" alt="" />
  						</div><!--end of button-->
 				 	
 				 	</a>
  					<a href="https://www.skype.com/en/">
  						<div class="button">
    						<img src="http://www.bryce-snyder.com/hosted/color/Skype.png" height="50" width="50" alt="" />
  						</div><!--end of button-->
  					</a>
				</ul>
			</nav>

		</div>
			
	</div>
	<div class="container">
		<div class="row">
			<div class="test2 center">
<!-- start of form -->
			
<h1>Contact Information</h1>

<!-- form takes in information and send it to the table -->
<?php  
    require_once(__DIR__ . "/model/config.php");
?>
<form class="text" method="post" action="<?php echo $path . '/controller/create-post.php'; ?>">
    <div>
        <!-- label display in front of the text box -->
        <label for="first">First Name: </label>
        <!-- input box occupied only on one line -->
        <input type="text" name="first" />
    </div>
    <div>
        <!-- label display in front of the text box -->
        <label for="last">Last Name: </label>
        <!-- input box occupied only on one line -->
        <input type="text" name="last" />
    </div>
    <div>
        <!-- label display in front of the text box -->
        <label for="email">Email: </label>
        <!-- input box occupied only on one line -->
        <input type="text" name="email" />
    </div>
    
    <div>
        <!-- another box label post -->
        <label for="post">Post: </label>
        
        <!-- text area allows to type a lot a text and span many lines   -->
        <!-- text area can show on multiple lines and can be expanded -->
        <textarea name="post"></textarea>
    </div>
        
    <div>
        <!-- create a button called submit -->
        <button class="btn btn-default" type="submit">Submit</button>
    </div>
</form>
<!-- end of form -->
				<h1>My Email</h1>
				<div class="jumbotron title">
					<address>
						Email: daymanblake@gmail.com <br>
						Created by <a href="http://gmail.com">Blake Dayman</a><br> 
						1140 Coronet Ave Pasadena CA
					</address>
				</div>

			</div>

		</div>
	</div>
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>