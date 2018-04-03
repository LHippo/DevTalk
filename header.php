<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>

	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>

	<header>

		<nav>
			<div class="main-wrapper">
				<ul>
					<li><a href="index.php">Acceuil</a></li>
				</ul>
				<div class="navbar-login">

					<form action="includes/login.inc.php" method="POST">
						<input type="text" name="uid" placeholder="Nom d'utilisateur">
						<input type="password" name="password" placeholder="Mots de passe">
						<button type="submit" name="submit">Connexion</button>
					</form>
					<a href="signup.php">Inscription</a>
					
				</div>
			</div>
		</nav>
		
	</header>