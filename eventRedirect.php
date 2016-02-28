<<<<<<< HEAD
<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<title>Add Event</title>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body id='thanks'>
<?php

=======
<link rel="stylesheet" type="text/css" href="css/style.css" />
<body id='thanks'>
<?php
>>>>>>> c04c972612f44a8517ac3447eb23c7fa2dfb9d86
try {
	$db = new PDO ("mysql:host=127.0.0.1;dbname=bs_fixer;charset=utf8", "root", "" );
	/* Other Codes */
} catch ( PDOException $e ) {
	echo "Error: " . $e;
}
	$title=$_POST['title'];
	$description=$_POST['description'];
	$x=1;
	$y=1;
	$picture=$_POST['picture'];
	$problem_id_fk=1;
	$user_id_fk=1;
	$interested=1;
	$time_Due="2012-07-08";


/*mysql_query("INSERT INTO `event`(`title`, `description`, `x`, `y`, `picture`, `problem_ID_fk`, `user_ID_fk`, `interested`)
 VALUES (`$title`,`$description`,`$x`,`$y`,`$picture`,`$problem_id_fk`,`$user_id_fk`,`$interested`");*/
	
		/*$insert = array (
			"title" => $title,
			"description" => $description,
			"x" => $x,
			"y" => $y,
			"picture" => $picture,
			"user_ID_fk" => $user_id_fk,
			"interested" => $interested
	);*/
		$sql = $db->prepare ( "INSERT INTO event (title, description, x, y,picture,user_ID_fk,interested) VALUES (:title,:description,:x,:y, :picture, :user_id_fk, :interested)" );
		$sql->bindParam ( ':title', $title );
		$sql->bindParam ( ':description', $description );
		$sql->bindParam ( ':x', $x );
		$sql->bindParam ( ':y', $y );
		$sql->bindParam ( ':picture', $picture );
		$sql->bindParam ( ':user_id_fk', $user_id_fk );
		$sql->bindParam ( ':interested', $interested );
		$sql->execute ();
	//$db->insert ( "event", $insert );
?>		
<div id="box">
		<br>
		<br>
		<p id="title_thanks">Event Created!</p>
		<a href="index.php"><button>Home</button></a>
	</div>

<<<<<<< HEAD
</body>
</html>
=======
</body>
>>>>>>> c04c972612f44a8517ac3447eb23c7fa2dfb9d86
