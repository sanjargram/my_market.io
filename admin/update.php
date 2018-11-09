<!DOCTYPE html>
<html>
<head>
	<title>Обновление</title>
</head>
<body>
	<?php
	 include('title.php'); 
	 include('boostrap.php');
	session_start();
   if(!isset($_SESSION['auth_id']) && !$_SESSION['auth_id']>0)
    {
      die('qlinmagan ukam');
    }
		$dbhost = 'localhost:3306';
		$dbuser = 'root';
		$dbpass = '123';
		$dbname = 'my_market';
		$conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
		if(! $conn ){
			echo 'Connected failure<br>';
		}
		
		$name = $_POST['name'];
		$password = $_POST['password'];

		$sql = "update user set name='".$name."', password='".$password."' where id=1";

		mysqli_query($conn, $sql);
		echo "Updated " . $_POST['name'] . " succesfully";
		mysqli_close($conn);
	?>
	<br>
	<a href="/admin/users.php">Вернуться к списку</a>
</body>
</html>