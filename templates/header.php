<!DOCTYPE html>
<html>
	<head>
		<title>TESTE SITE</title>
		<link rel="stylesheet" href="css/site.css">
		<link rel="stylesheet" href="css/session.css">
		<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
		<script src="js/header.js"></script>
	</head>
	<body>
		<div id="header">
		
			<h1> Site Teste</h1>
		
			<div id="session">
			<?php
					if (!isset($_SESSION['id_account'])){ ?>
				<div id="guest">
					<div id="login">
						<input id="do_login" class="session" type="submit" name="Login" value="Login">
						<form id="loginform" method="post" action="action_login.php">
						  <label for="username">Username</label>
						  <input class="insert_info" type="text" name="username" required="required">
						  <label for="password">Password</label>
						  <input class="insert_info" type="password" name="password" required="required">
						  <input id="login_button" type="submit" value="Login" class="block_button">
						</form>						
					</div>
					<div id="do_signup">
						<input id="do_signup" class="session" type="submit" name="SignUp" value="SignUp">
					</div>
				</div>
					<?php }else{ 
				echo '<a class="account">' . $_SESSION['name'] . ' (' . '<a id="username" class="account">' .$_SESSION['id_account'] . '</a>' . ') </a> <br>';
				echo $_SESSION['type'] . '<br>';?>
				<div id="account">
					<input id="do_logout" class="session" type="submit" name="Logout" value="Logout">
				</div>
					<?php } ?>
				
			</div>
			
			<div id="menu">
				<ul>
					<li><a href="index.php">Home</a></li> 
					<li><a href=""> Restaurants </a> </li>
					<li><a href=""> Advanced Search </a> </li>
					<li><a href=""> Information </a></li>
					<?php
					if (isset($_SESSION['id_account'])){
					echo '<li><a class="account"> Account </a></li>';
					}
					?>
				</ul>
			</div>
		</div>