<link rel="stylesheet" type="text/css" href="css/style.css" />
<body id='thanks'>
<?php
<<<<<<< HEAD
try {
	$db = new PDO ( "mysql:host=127.0.0.1;dbname=bs_fixer;charset=utf8", "root", "" );
	/* Other Codes */
} catch ( PDOException $e ) {
	echo "Error: " . $e;
}
$user = $_POST ['username'];
$pass = $_POST ['password'];



$user = stripslashes ( $user );
$pass = stripslashes ( $pass );
if($_POST && isset($_POST['username'])){
	$sql =("SELECT * FROM 'user' WHERE 'username' = :username AND 'password' = :password");
	$result = $db->prepare($sql);
	$result->bindParam(":username" ,$_POST['username']);
	$result->bindParam(":password" ,$_POST['password']);
	$result->execute();
	
    $num=$result->fetchColumn();
    if($num > 0){
    header("location:Home.php");
    }else{
    header("location:index.php");
}
}
//$user = mysql_real_escape_string ( $user );
//$pass = mysql_real_escape_string ( $pass );

$sql = "SELECT * FROM user WHERE username='$user' and password='$pass'";
$result = mysql_query ( $sql );

// Mysql_num_row is counting table row
$count = mysql_num_rows ( $result );
// If result matched $username and $password, table row must be 1 row
if ($count == 1) {
	?>
<div id="box">
		<br> <br>
		<p id="title_thanks">Login Successful!</p>
		<a href="index.php"><button>Go back to home page</button></a>
	</div>
<?php
} else {
	?>
    <div id="box">
		<br> <br>
		<p id="title_thanks">Username or Password is incorrect!</p>
		<a href="index.php"><button>Back</button></a>
	</div>
<?php
}
ob_end_flush ();
=======
$function = 6;
include 'phpWrapper.php';

>>>>>>> c04c972612f44a8517ac3447eb23c7fa2dfb9d86
?>



</body>