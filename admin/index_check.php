<html>
<html>
<head>
	<title>Checking Table in MySQLi Server</title>
</head>
<body>
	<?php 
include('title.php'); 
include('boostrap.php');

  

		$dbhost = 'localhost:3306';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'my_market';
    $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
    if(! $conn ){
      echo 'Connected failure<br>';
    }
   
    $name = $_POST['name'];
    $password = $_POST['password'];

    $sql = "SELECT id FROM user where name='".$name."' and password='".$password."'";

   $result= mysqli_query($conn, $sql);

     session_start();
     $_SESSION['name'] = $name;
     $_SESSION['auth_id'] = $password;
    
 if(!isset($_SESSION['auth_id']) && !$_SESSION['auth_id']>0)
    {
      die('qlinmagan ukam');
    }

  ?>

<h3>Panel Admnistratora</h3>
<p><a href="products.php">Products</a></p><br>
<p><a href="users.php">Users</a></p>
</body>
</html>