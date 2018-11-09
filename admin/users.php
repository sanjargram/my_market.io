<!DOCTYPE html>
<html>
<head>
	<title>users</title>
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
$connection = mysqli_connect('localhost', 'root', '', 'my_market');

if (! $connection) {
	mysqli_error();
	echo "error";
	die();
}
 $sql = 'SELECT * FROM users';

 $result = mysqli_query($connection, $sql);
 


 echo "<table border='1'>";
    echo "<tr><th>";
    echo "ID";
    echo "</th>";
    echo "<th>";
    echo "Name";
    echo "</th>";
    echo "<th>";
    echo "";
    echo "</th></tr>";
    while($row=mysqli_fetch_assoc($result)){
      echo "<tr><td>";
      echo $row['id'];
      echo "</td>";
      echo "<td>";
      echo $row['name'];
      echo "</td>";
      echo "<td class='edit'>";
      echo "<form method='POST'>

          <input type=hidden name='edit' value=''>

          <input type='submit' value='Редактировать' class='inputs'>" . " | " . " 
          <input type=hidden name='delete' value='12'> 
          <input type='submit' value='Удалить' class='inputs'>
         </form>";
      echo "</td></tr>";


    }
    echo "</table>";
  ?>
  <input type="submit" name="send" value="add products">

    <a href="http://my_market.io/users.php?sort=ASC&column=name">
      sort &darr;
    </a>
    <a href="http://my_market.io/users.php?sort=DESC&column=name">
      sort &uarr;
    </a>
    <a href="http://my_market.io/users.php?sort=ASC&column=id">
      refresh
    </a>
 

</body>
</html>