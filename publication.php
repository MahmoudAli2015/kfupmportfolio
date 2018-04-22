<?php
	$user = 'root' ; 
	$password = '' ;
	$db = 'adham' ; 
	$host = 'localhost' ; 
	$port = 8080 ; 

	$link = mysqli_connect("localhost","root","","adham") ;
	
	
		if(isset($_POST['submitPub']))
		{
		$thesis = $_POST['thesis'] ;
		$book = $_POST['book'] ; 
		$report = $_POST['report1'] ; 
		$conferencePub = $_POST['conferencePub'] ; 
		$journalPub = $_POST['journalPub'] ; 
		 
		
		
		$qry = "INSERT INTO publication (thesis,book,report,conferencePub,journalPub) VALUES ('$thesis','$book','$report','$conferencePub','$journalPub')"; 

		$result = mysqli_query($link,$qry) ; 
		if ($result)
		{
			header('Location: membership.html');
		}
		else
		{
			echo "<script type='text/javascript'>alert('failure'); location.href='publication.html';</script>" ; 
		}

}
else
{
	echo "problem" ; 
}




?> 