<?php
	session_start() ; 
	$user = 'root' ; 
	$password = '' ;
	$db = 'adham' ; 
	$host = 'localhost' ; 
	$port = 8080 ; 
	

	$link = mysqli_connect("localhost","root","","adham") ;

	if (isset($_POST['loginButton'])){
$username = $_POST['email1'];
$password = $_POST['password1'];
$sql= "SELECT * FROM infot WHERE email = '$username' AND password = '$password'";
$result = mysqli_query($link,$sql);
$check = mysqli_fetch_array($result);
if(isset($check)){
	$sql = "SELECT ID FROM infot WHERE email = '$username'" ;
	$result = mysqli_query($link,$sql) ; 
	$row = mysqli_fetch_array($result) ; 
	$id = $row['ID'] ; 
	$_SESSION['ID'] = $id ;
	header('Location: userProfile.php');
}
else{
	echo "<script type='text/javascript'>alert('failure'); location.href='index.html';</script>";

	}
}
?> 