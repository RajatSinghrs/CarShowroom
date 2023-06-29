<?php
$con=mysqli_connect('localhost','root','','showroom') or die(mysqli_error());

//post data from html form
$name=$_POST['username'];
$email=$_POST['email'];
$contact=$_POST['number'];
$password=$_POST['pass'];

 
$query="INSERT INTO signup VALUES ('$name','$email','$contact','$password')";
mysqli_query($con,$query);

header("Location: login.html");
exit();

?>