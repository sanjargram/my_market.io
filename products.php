<!DOCTYPE html>
<html>
<head>
	<title>users</title>
</head>
<body style="background-color: #00CE9A">
<?php
include('boostrap.php');
	$connection = mysqli_connect('localhost', 'root', '', 'my_market');

	if(!$connection){

		mysqli_error();
		echo "error";
		die();
	}

	$sql = "SELECT * FROM product";



	$result = mysqli_query($connection, $sql);

	$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

	mysqli_close($connection);
	

echo "<table>";

$k = 0;
$tr_open = false;
foreach ($rows as $row) {
	$k++;
	if ($k%3 ==1) {
	echo "<tr>";
	$tr_open=true;
	}			
	echo "<td>" . $row['id'] . '<br><a href="product_view.php?id='.$row['id'].'">' . $row['name'] . '</a><br>' . $row['cost'] . '</td>';
		

		if ($k%3==0) {
			echo "</tr>";
			$tr_open = 'false';
		}
}

if ($tr_open) {
	echo "</tr>";
	$tr_open='false';
}

	echo '</table>';



?>

</body>
</html>