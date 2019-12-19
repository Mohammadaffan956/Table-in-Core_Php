<?php 
	$connect = mysqli_connect("localhost","root","","hamari academy");
	$name = $_POST['first'];
	$lastn = $_POST['sur'];
	$email = $_POST['email'];
	$pas = $_POST['pass'];
	$insert = "INSERT INTO `user_info`(`UserName`, `lastName`, `Email`, `Password`) VALUES ('$name','$lastn','$email','$pas')";
	mysqli_query($connect , $insert);
 ?>