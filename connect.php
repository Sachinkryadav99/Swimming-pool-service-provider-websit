<?php

if(isset($_POST['submit']))
{
	$name = $_POST['name'];
	$conno = $_POST['conno'];
	$Whatno = $_POST['Whatno'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	

	$conn = mysqli_connect('localhost','root','','bharat');
	$sql = "INSERT INTO bharath12(name,conno,Whatno,email,message) values('$name','$conno','$Whatno','$email','$message')";
	mysqli_query($conn,$sql);
}


?>