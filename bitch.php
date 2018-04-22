<?php 

	$user = 'root' ; 
	$password = '' ;
	$db = 'adham' ; 
	$host = 'localhost' ; 
	$port = 8080 ; 

	$link = mysqli_connect("localhost","root","","adham") ;
	if (isset($_POST['submit']))
	{
		$fname = $_POST['fname'] ;
		$qry = "INSERT INTO plz(name) VALUES ('$fname')"; 
		$result = mysqli_query($link,$qry) ; 

		if($result)
		{
			echo "تكففففه";
		}
		else
		{
			echo "xx";
		}
	}

 ?>