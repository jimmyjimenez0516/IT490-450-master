<?php
session_start();
require_once('functions.php');
	loggedCheck();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<script src="favorite.js"></script>
	<link rel="stylesheet" href="landingPage.css">
</head>
<body>
				<div>
						<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">
							<a class="navbar-brand" href="landingPage.php">SportWatch</a>
								<ul class="navbar-nav">
									<li class="nav-item active">
										<a class="nav-link" href="landingPage.php">Home</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="events.php">Events</a>
									</li>
									<li class="nav-item active">
										<a class="nav-link" href="favorites.php">Favorites</a>
									</li>
								</ul>
								<ul class="navbar-nav ml-auto">
									<a class="navbar-brand pl-4" href="profile.php">
										<img src="person.png" alt="logo" style="width:40px;">
									</a>
									<li class="nav-item active">
										<a class="nav-link" href="logout.php">Logout</a>
									</li>
								</ul>
						</nav>
						<br><br><br>
						<input type="hidden" id="username" name="username" value="<?php echo $_SESSION['uname']?>">

            <div id="favoriteTeams">

            Favorites page

            </div>
</body>
</html>
