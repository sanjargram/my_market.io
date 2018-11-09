
	<html>
	<html>
	<head>
		<title>Login</title>
	</head>
	<body>
	<?php
	include('boostrap.php');
	?>
	

	
		<form action='index_check.php' method='POST'>
		<fieldset>ADMNISTRATOR<br>
		<input type="text" name="name"><br>
		<input type="password" name="password"><br>
		<input type="hidden" value="<?php echo $id ?>">
		<input type="submit" value="Login">
		</fieldset>
		</form>
		
	</body>
	</html>