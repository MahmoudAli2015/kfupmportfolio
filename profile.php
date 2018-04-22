<?php
	session_start();
	$user = 'root' ; 
	$password = '' ;
	$db = 'adham' ; 
	$host = 'localhost' ; 
	$port = 8080 ; 

	$link = mysqli_connect("localhost","root","","adham") ;
	if(getimagesize($_FILES['pic']['tmp_name'])== FALSE)
	{
		echo "plz upload picture" ; 
	}
	else
	{
		if(isset($_POST['submitPro']))
		{
		$education = $_POST['education'] ;
		$department = $_POST['department'] ; 
		$area = $_POST['area'] ; 
		$expY = $_POST['expY'] ; 
		$bio = $_POST['bio'] ;
		$uid = $_SESSION['ID'];  
		$image = addslashes($_FILES['pic']['tmp_name']); 
		$image=file_get_contents($image); 
		$image=base64_encode($image);
		$qry = "INSERT INTO profile(image,department,area,expY,bio,education,uid) VALUES ('$image','$department','$area','$expY','$bio','$education','$uid')"; 
		$result = mysqli_query($link,$qry); 
		if ($result)
		{
			header('Location: publication.html');

		}
		else
		{
			echo "<script type='text/javascript'>alert('failure'); location.href='dashboard.html';</script>"; 
		}

}

else
{
	echo "yes" ; 
}

}


?> 