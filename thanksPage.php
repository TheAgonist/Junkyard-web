<link rel="stylesheet" type="text/css" href="css/style.css" />
<body id = "thanks">
<?php
<<<<<<< HEAD
	include 'connect.php';
	$f_Name = $_POST['firstnamesignup'];
	$l_Name = $_POST['lastnamesignup'];
	$username = $_POST['usernamesignup'];
	$mail = $_POST['emailsignup'];
	$password = $_POST['passwordsignup'];
		
	mysql_query("INSERT INTO `user`(`username`, `password`, `f_Name`, `l_Name`, `mail`) VALUES ('$username', '$password', '$f_Name', '$l_Name', '$mail')");
?>
=======
$function = 1;	
include 'phpWrapper.php';
	

	?>
>>>>>>> c04c972612f44a8517ac3447eb23c7fa2dfb9d86
<div id = "box">
<br><br>
	<p id="title_thanks">Thank you for your registration!</p>
	<a href="index.php"><button>Home</button></a>
</div>
	
</body>