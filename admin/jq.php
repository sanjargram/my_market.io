<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		include('boostrap.php');
	?>
</head>
<body>
<script>	
$(document).ready(function(){
	$("#but1").click(function){
		alert("vi najali odin raz na pervuyu knopku");
	});
	$("#but2").dblclick(function(){
	alert("vi najali dva raz na pervuyu knopku");
    })
});

</script>

</body>
</html>