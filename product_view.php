<!DOCTYPE html>
<html>
<head>
	<title>About products</title>

</head>
<body style="background-color:#61B3CE">

<?php
include('boostrap.php');

	$connection = mysqli_connect('localhost', 'root', '', 'my_market');	

	if (! $connection) {
		mysqli_error();
		echo "error";
		die();
	}
	
	$id=$_GET['id'];
 	$sql = 'SELECT * FROM product where id='.$id;

	$result = mysqli_query($connection,$sql);
	if(mysqli_num_rows($result)>0){
	 	$row = mysqli_fetch_assoc($result);

	 	echo "<img src='".$row['photopath']."'>";
	 	echo '<table border=2>';
	 	echo "<tr><td>name</td><td>proscessr</td><td>vinchestr</td><td>OZU</td><td>color</td><td>videocard</td><td>cost</td></tr>";
	 	echo "<tr><td>". $row['name'] . "</td>";
	 	echo "<td>" . $row['proscessr'] . "</td>";
	 	echo "<td>". $row['vinchestr']  . "</td>";
	 	echo "<td>" . $row['OZU'] . "</td>";
	 	echo "<td>" . $row['color'] . "</td>";
	 	echo "<td>" . $row['videocard'] . "</td>";
	 	echo "<td>" . $row['cost'] . "</td></tr>";
	 	echo '</table>';
	}


?>

</body>
</html>