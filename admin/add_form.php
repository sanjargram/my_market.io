<!DOCTYPE html> 
<html>
<head>
	<title>dobovlenya tovara</title>
</head>
<body style="background-color: #49CE89">
<?PHP include('title.php'); 
include('boostrap.php');
?>

<form method="POST" enctype="multipart/form-data">
<fieldset>
	<legend>to chto nujna dopolnit vam</legend>
Input your name:<input type="text" name="name" value="" required=""><br>
Input your proscessr:<input type="text" name="proscessr" value="" required=""><br>
Input your vinchestr:<input type="text" name="vinchestr" value="" required=""><br>
Input your OZU:<input type="text" name="OZU" value="" required=""><br>
Input your color:<input type="text" name="color" value="" required=""><br>
Input your dioganal:<input type="text" name="dioganal" value="" required=""><br>
Input your cost:<input type="text" name="cost" value="" required=""><br>
Input your wariety:<input type="text" name="wariety" value="" required=""><br>
Input your videocard:<input type="text" name="videocard" value="" required=""><br>
Load image: <input type="file" name="picture" required><br>
<input type="submit" name="send" value="add products">

</fieldset>

<?php
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

 if(isset($_POST['send'])){
    $error = $_FILES["picture"]["error"];
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["picture"]["tmp_name"];
        // basename() may prevent filesystem traversal attacks;

        $name = basename($_FILES["picture"]["name"]);        
        move_uploaded_file($tmp_name, "../img/$name");

        
        echo "<pre>";
        echo $ext = pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION);
        var_dump($_FILES);
        
        echo "</pre>";

    }
        $sql = "insert into product (name, wariety, cost, color, OZU, videocard, dioganal, vinchestr, proscessr, photopath) values (" . "'" .
        $_POST['name'] . "', '" . $_POST['wariety'] . "', '" .  $_POST['cost'] . "', " .
        $_POST['dioganal'] . ", '" . $_POST['OZU'] . "','" . $_POST['color'] . "','" . $_POST['vinchestr'] . "','" . $_POST['proscessr'] . "', " . $_POST['videocard'] . ", '" . "img/". $_FILES['picture']['name'] . "')";

        mysqli_query($connection, $sql);
        echo "succes!";
        echo $_POST['name'];
        echo $sql;
      } else {
        echo "error";
      }

?>

</body>
</html>