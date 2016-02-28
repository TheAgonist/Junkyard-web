<link rel="stylesheet" type="text/css" href="css/style.css" />
<body id='thanks'>
<?php
try {
	$db = new PDO ("mysql:host=127.0.0.1;dbname=bs_fixer;charset=utf8", "root", "" );
	/* Other Codes */
} catch ( PDOException $e ) {
	echo "Error: " . $e;
}
	$title = $_POST['title'];
	$description = $_POST['description'];
	$x = 1;
	$y = 1;
	$picture = $_POST['picture'];
	$user_id_fk = 1;
	$solved = 1;
	
	/*$insert = array (
			"title" => $title,
			"description" => $description,
			"x" => $x,
			"y" => $y,
			"picture" => $picture,
			"user_id_fk" => $user_id_fk,
			"solved" => $solved
	);*/
	
	$sql = $db->prepare ( "INSERT INTO problem (title, description, submitted, x, y,picture) VALUES (:title,:description,:submitted,:x,:y, :picture)" );
	$sql->bindParam ( ':title', $title );
	$sql->bindParam ( ':description', $description );
	$sql->bindParam ( ':submitted', $submitted );
	$sql->bindParam ( ':x', $x );
	$sql->bindParam ( ':y', $y );
	$sql->bindParam ( ':picture', $picture );
	$sql->execute ();
	/*
	$title = $_POST['title'];
	$description = $_POST['description'];
	$x = 1;
	$y = 1;
	$picture = $_POST['picture'];
	$user_id_fk = 1;
	*/
	/*$title = "123";
	$description = "1";
	$submitted = "1";
	$x = 1;
	$y = 1;
	$picture = "1";
	$problem_id_fk = "1";
	$user_id_fk = "1";
	$interested = "1";
	$time_Due = "1";*/
	
	
	//$db->insert ( "problem", $insert );
	//$result = mysql_query("SELECT * FROM problem");
	//var_dump($result);
?>		
<div id="box">
		<br>
		<br>
		<p id="title_thanks">Problem Created!</p>
		<a href="index.php"><button>Home</button></a>
	</div>