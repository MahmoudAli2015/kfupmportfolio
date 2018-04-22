<?php
	$user = 'root' ; 
	$password = '' ;
	$db = 'adham' ; 
	$host = 'localhost' ; 
	$port = 8080 ; 

	$link = mysqli_connect("localhost","root","","adham") ;
		
	
		if(isset($_POST['submitMem']))
		{
		$profOrg = $_POST['profOrg'] ;
		$editB = $_POST['editB'] ; 
		$conOrg = $_POST['conOrg'] ;  
		 
		
		
		$qry = "INSERT INTO membership(profOrg,editB,conOrg) VALUES ('$profOrg','$editB','$conOrg')"; 

		$result = mysqli_query($link,$qry) ; 
		if ($result)
		{
			echo "done" ; 
		}
		else
		{
			echo "<script type='text/javascript'>alert('failure'); location.href='membership.html';</script>" ; 
		}

}
else
{
	echo "problem" ; 
}



?> 