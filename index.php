<?php
	session_start();
?>

<!DOCTYPE HTML>
<html lang="pl">
<head>

	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	
	<title>Hackme.pl</title>
	
	<meta name="description" content="Hackme.pl Polska strona mająca na celu uczenia atakow hackerskich" />
	<meta name="keywords" content="Hackme.pl" />
	
	<script type="text/javascript" src="main.js"></script>

	<link href="style.css" rel="stylesheet" type="text/css" />

	<link href='http://fonts.googleapis.com/css?family=Lato:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
	<link href="css/fontello.css" rel="stylesheet" type="text/css" />
	
</head>

<body>
	<div class="container">
		<div class="header">
			<a href="index.php" style="text-decoration:none;">
				<div class="logo">
					<span style="color: #00ff80">Hack</span><span style="color: #ffffff">me.pl</span>
					<div style="clear:both;"></div>
				</div>
			</a>
		</div>

		<div class="nav">
			<ol>
                <li><a href="index.php">Strona główna</a></li>
				<li><a href="aboutauthor.php">O autorach</a></li>
				<?php
					if(isset($_SESSION["Username"]))
					{
						echo "<li><a href='profilepage.php'>Profile page</a></li>";
						echo "<li><a href='logout.php'>Log out</a></li>";
					}
					else
					{
						echo "<li><a href='includes/signup.php'>Sign up</a></li>";
						echo "<li><a href='includes/login.php'>Log in</a></li>";
					}
				?>
			</ol>
		</div>
		
		<script src="main.js"></script>



	

<?php 
	include_once 'includes/footer.php';
?>