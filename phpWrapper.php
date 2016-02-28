<?php
/*
 *
 * PHP MySQL Wrapper Exmaples
 *
 * PHP version required (PHP 5)
 *
 */
try {
	$db = new PDO ( "mysql:host=127.0.0.1;dbname=bs_fixer;charset=utf8", "root", "" );
	/* Other Codes */
} catch ( PDOException $e ) {
	echo "Error: " . $e;
}

// $function serves to specify the type of querry you want

if ($function == 1) {
	
	// Insert a new user
	
	$sql = $db->prepare ( "INSERT INTO user (username, password, f_name, l_name, mail) VALUES (:name, :pass, :f_name, :l_name, :mail)" );
	$sql->bindParam ( ':name', $name );
	$sql->bindParam ( ':pass', $pass );
	$sql->bindParam ( ':f_name', $f_name );
	$sql->bindParam ( ':l_name', $l_name );
	$sql->bindParam ( ':mail', $mail );
	
	$name = $_POST ['usernamesignup'];
	$pass = $_POST ['passwordsignup'];
	$f_name = $_POST ['firstnamesignup'];
	$l_name = $_POST ['lastnamesignup'];
	$mail = $_POST ['emailsignup'];
	$sql->execute ();
}

if ($function == 2) {
	
	// Add a new problem
	
	$sql = $db->prepare ( "INSERT INTO problem (title, description, x, y,picture) VALUES (:title,:description,:x,:y, :picture)" );
	$sql->bindParam ( ':title', $title );
	$sql->bindParam ( ':description', $description );
	$sql->bindParam ( ':x', $x );
	$sql->bindParam ( ':y', $y );
	$sql->bindParam ( ':picture', $picture );
	
	$title = $_POST ['title'];
	$description = $_POST ['description'];
	$x = "42.526628";
	$y = "27.450328";
	$picture = $_POST ['picture'];
	$sql->execute ();
}

if ($function == 3) {
	
	// Add a new event
	
	$sql = $db->prepare ( "INSERT INTO event (title, description, x, y,picture,user_ID_fk,interested) VALUES (:title,:description,:x,:y, :picture, :user_id_fk, :interested)" );
	$sql->bindParam ( ':title', $title );
	$sql->bindParam ( ':description', $description );
	$sql->bindParam ( ':x', $x );
	$sql->bindParam ( ':y', $y );
	$sql->bindParam ( ':picture', $picture );
	$sql->bindParam ( ':user_id_fk', $user_id_fk );
	$sql->bindParam ( ':interested', $interested );
	
	$title=$_POST['title'];
	$description=$_POST['description'];
	$x=42.526628;
	$y=27.450328;
	$picture=$_POST['picture'];
	$problem_id_fk=1;
	$user_id_fk=1;
	$interested=1;
	$time_Due="2012-07-08";
	$sql->execute ();
}

if ($function == 4) {
	
	// Add a new comment
	
	$sql = $db->prepare ( "INSERT INTO comment (text, user_ID_fk, event_ID_fk) VALUES (:text,:user_ID_fk,:event_ID_fk)" );
	$sql->bindParam ( ':text', $text );
	$sql->bindParam ( ':user_ID_fk', $user_ID_fk );
	$sql->bindParam ( ':event_ID_fk', $event_ID_fk );
	
	$text = "121";
	$user_ID_fk = "1";
	$event_ID_fk = "1";
	$sql->execute ();
}

if ($function == 5) {
	// Increase problem rating
	
	$rating = 5;
	$user_ID = 1;
	$problem_ID = 2;
	$flag = true;
	
	$sql = "SELECT userUpvote_ID FROM user_upvote WHERE user_ID_fk='$user_ID' AND problem_ID_fk='$problem_ID'";
	foreach ( $db->query ( $sql ) as $row )
		if ($row ['userUpvote_ID'])
			$flag = false;
	if ($flag) {
		$rating = $rating + 1;
		$sql = "UPDATE problem SET rating = '$rating' WHERE problem_ID='$problem_ID'";
		$db->query ( $sql );
		$insert = array (
				"user_ID_fk" => $user_ID,
				"problem_ID_fk" => $problem_ID 
		);
		$sql = $db->prepare ( "INSERT INTO user_upvote (user_ID_fk, problem_ID_fk) VALUES (:user_ID_fk,:problem_ID_fk" );
		$sql->bindParam ( ':user_ID_fk', $user_ID );
		$sql->bindParam ( ':problem_ID_fk', $problem_ID );
		$sql->execute ();
	}
}

if ($function == 6) {
	$username = $_POST ['username'];
	$password = $_POST ['password'];
	$flag = 0;
	
	$sql = "SELECT user_ID FROM user WHERE username='$username' AND password='$password'";
	foreach ( $db->query ( $sql ) as $row )
		if ($row ['user_ID'])
			$flag = 5;
	
	echo $flag;
}

if ($function == 7) {
	$sql = "SELECT * FROM problem ";
	foreach ( $db->query ( $sql ) as $row ) {
		echo $row ['problem_ID'];
		echo $row ['title'];
		echo $row ['description'];
		echo $row ['submitted'];
		echo $row ['x'];
		echo $row ['y'];
		echo $row ['picture'];
		echo $row ['rating'];
		echo $row ['solved'];
		echo $row ['date_Solved'];
	}
}
if ($function == 8) {
	$i = 1;
	$i += 1;
	$sql = "SELECT * FROM problem WHERE problem_id = '$i'";
	foreach ( $db->query ( $sql ) as $row ) {
		echo $row ['problem_ID'];
		echo $row ['title'];
		echo $row ['description'];
		echo $row ['submitted'];
		echo $row ['x'];
		echo $row ['y'];
		echo $row ['picture'];
		echo $row ['rating'];
		echo $row ['solved'];
		echo $row ['date_Solved'];
	}
}
?>