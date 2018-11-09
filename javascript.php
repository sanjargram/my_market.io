<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php
		include('boostrap.php');
	?>

	<script>
// var fruits=["Banana","Orange","Apple","Cherry"];
// console.log(fruits.splice(3));
// console.log(fruits);
// console.log(fruits.splice(2,));

// function toCelsius(fahrenheit){
// 	return (5/9)*(fahrenheit-32);
// }

// document.body.innerHTML=toCelsius(77);
// var x = function(a,b){
// 	return a*b
// };
// var z = x(4,3); var y=x;
// (function(){


// x ="Hello!!";
// })();

// alert(x);

// var person ={
// 	firstName:"John",
// 	lastName:"Doe",
// 	age:50,
// 	eyeColor:"blue"
// };
// document.write(person.firstName," ", person.lastName, " ", person.age, " ", person.eyeColor);

function person(first,last,age,eye){
	this.firstName=first;
	this.lastName=last;
	this.age=age;
	this.eyeColor=eye;
};
// console.log(person);
var myFather=new person("John","Doe",50,"blue");
//console.log(myFather);
myFather.nationality="English";
console.log(myFather);
person.prototype.name=function(){
	return this.firstName+" "+this.lastName;
};
console.log(person);
console.log(myFather);

var p2 = new

document.write(myFather.firstName," ", myFather.lastName, " ", myFather.age, " ", myFather.eyeColor);

</script>
</body>
</html>