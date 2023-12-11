<?php

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$address = $_POST['address'];
	$Street = $_POST['Street'];
	$city = $_POST['city'];
	$state = $_POST['state'];
	$postal = $_POST['postal'];
	$Date = $_POST['Date'];
	

	$conn = mysqli_connect('localhost','root','','bharat');
	$sql = "INSERT INTO bookonline(name,email,phone,address,Street,city,state,postal,Date) values('$name','$email','$phone','$address','$Street','$city','$state','$postal','$Date')";
	
	mysqli_query($conn,$sql);
}


?>