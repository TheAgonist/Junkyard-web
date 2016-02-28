<!DOCTYPE html>
<html>
<head >
<title>Page Title</title>
<link rel="stylesheet" type="text/css" href="css/Home.css">
</head>

<body>
	<div align="center">
		
			<button class="button button1" onclick="parent.location='Home.php'">Problems</button>
			<button class="button button1" onclick="parent.location='listAllEvents.php'">Events</button>
			<button class="button button1">Click Me!</button>
			<button class="button button1" onclick="parent.location='index.php'">Log In</button>
		
	</div>
<?php include 'listAllProblems.php'; ?>
	
</body>
</html>
