<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php
		include('boostrap.php');
	?>
</head>
<body>
<input type="button" name="knopka" value="knopka" id="but1">
<script>	
// $(document).ready(function(){
// 	$("#but1").click(function){
// 		alert("vi najali odin raz na pervuyu knopku");
// 	});
// 	$("#but2").dblclick(function(){
// 	alert("vi najali dva raz na pervuyu knopku");
//     })
// });
$(document).ready(function(){
	$("p").mouseover(function(){
		$("p").css("color","green")
		$("p").css("font-size", "70px")
	});
	$("p").mouseout(function(){
		$("p").css("color","black")
		$("p").css("font-size", "10px")
	});
});
// $(document).ready(function() { 
//    $("#but1").click(function() {
//       $("#par1").animate({fontSize: "1.3em"}, 1000);
//       $("#par1").animate({marginLeft: "30px"}, 1000);
//       $("#par1").animate({marginTop: "50px"}, 1000);
//       $("#par1").animate({fontSize: "1em"}, 1000);
//       $("#par1").animate({marginLeft: "0px"}, 1000);
//       $("#par1").animate({marginTop: "0px"}, 1000);
//    });
// });

 // var value=$("p").html();
 // console.log(value);
// $(document).ready(function(){
// 	$("#but1").click(function(){
// 		$("#par1").load('testfile.txt');
// 	})
// });
$("#but1").click(
	function()
	{
		$.ajax(
			{
				url: 'response.php?action=sample1',
				success: function(data){
					$('.results').html(data);
				}
			}
		);
	alert("vi");
	}
	);



</script>
<div class="results">jdem otveta</div>
<p>nma gaaaap ukalaa</p>

<input type="button" name="knopka" value="knopka" id="but2">
<input type="button" name="knopka" value="knopka" id="but3">
<input type="button" name="knopka" value="knopka" id="but4">
<input type="button" name="knopka" value="knopka" id="but5">
<div id="par1">
	
</div>
</body>
</html>