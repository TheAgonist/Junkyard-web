<!DOCTYPE html>
<html>

<head >
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/Home.css">
</head>

<body>
	<div align="center" class="logo">
<img class="img img3" src="images/Logo2.png" width="124" height="124" >
	</div>
	<div align="center">
		
			<button class="button button1" onclick="parent.location='Home.php'">Problems</button>
			<button class="button button1" onclick="parent.location='listAllEvents.php'">Events</button>
			<button class="button button1" onclick="parent.location='NewPorE.php'">Create</button>
			<button class="button button1" onclick="parent.location='index.php'">Log In</button>
</div>
<?php include 'listAllProblems.php'; ?>
	
</body>
</html>
