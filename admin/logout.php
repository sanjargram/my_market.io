<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
include('boostrap.php');
session_start();
$_SESSION['name'] = null;
$_SESSION['auth_id'] = null;
header('Location:http://my_market.io/admin');

?>
</body>
</html>