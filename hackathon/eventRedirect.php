<link rel="stylesheet" type="text/css" href="css/style.css" />
<body id='thanks'>
<?php
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

</body>