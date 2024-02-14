<?php
$connect= mysqli_connect('localhost','root','','muhire');
if(isset($_POST['muhire']))
$firstname=$_POST['firstname'];
$surname=$_POST['surname'];
$username=$_POST['username'];
$email=$_POST['email'];
$gender=$_POST['gender'];
$password=$_POST['password'];

$query="INSERT INTO users(firstname,surname,username,email,gender,password) VALUES($firstname,$surname,$username,$email,$gender,$password)";


$result=mysqli_query($connect,$query);

if($result){
	echo "you have successfuly register";
}

else {
	echo"fail";
}
