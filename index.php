<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
<meta charset="UTF-8" />
<title>Login and Registration Form with HTML5 and CSS3</title>
<link rel="stylesheet" type="text/css" href="css/demo.css" />
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
</head>
<body>
<div align="center" class="logo">
<img class="img img3" src="images/Logo2.png" width="124" height="124" >
	</div>
	<div class="container">
		<header> </header>
		<section>
			<div id="container_demo">
				<a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor"
					id="tologin"></a>
				<div id="wrapper">
					<div id="login" class="animate form">
						<form action="loginRedirect.php" autocomplete="on" method='post'>
							<h1>Log in</h1>
							<p>
								<label for="username" class="uname" data-icon="u"> Your email or
									username </label> <input id="username" name="username"
									required="required" type="text" />
							</p>
							<p>
								<label for="password" class="youpasswd" data-icon="p"> Your
									password </label> <input id="password" name="password"
									required="required" type="password" />
							</p>

							<p class="login button">
								<input type="submit" value="Login" />
							</p>
							<p class="change_link">
								Not a member yet ? <a href="#toregister" class="to_register">Join
									us</a>
							</p>
						</form>
					</div>
					<div id="register" class="animate form">
						<form action="thanksPage.php" autocomplete="on" method='post'>
							<h1>Sign up</h1>
							<p>
								<label for="usernamesignup" class="uname" data-icon="u">Your
									username</label> <input id="usernamesignup"
									name="usernamesignup" required="required" type="text" />
							</p>
							<p>
								<label for="firstnamesignup" class="fname" data-icon="u">Your
									First Name</label> <input id="firstnamesignup"
									name="firstnamesignup" required="required" type="text" />
							</p>
							<p>
								<label for="lastnamesignup" class="lname" data-icon="u">Your
									Last Name</label> <input id="lastnamesignup"
									name="lastnamesignup" required="required" type="text" />
							</p>
							<p>
								<label for="emailsignup" class="youmail" data-icon="e"> Your
									email</label> <input id="emailsignup" name="emailsignup"
									required="required" type="email" />
							</p>
							<p>
								<label for="passwordsignup" class="youpasswd" data-icon="p">Your
									password </label> <input id="passwordsignup"
									name="passwordsignup" required="required" type="password" />
							</p>
							<p>
								<label for="passwordsignup_confirm" class="youpasswd"
									data-icon="p">Please confirm your password </label> <input
									id="passwordsignup_confirm" name="passwordsignup_confirm"
									required="required" type="password" />
							</p>
							<p class="signin button">
								<input type="submit" value="Sign up" />
							</p>
							<p class="change_link">
								Already a member ? <a href="#tologin" class="to_register"> Go
									and log in </a>
							</p>
						</form>
					</div>

				</div>
			</div>
		</section>
	</div>
</body>
</html>