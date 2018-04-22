<?php
	session_start() ; 
	$user = 'root' ; 
	$password = '' ;
	$db = 'adham' ; 
	$host = 'localhost' ; 
	$port = 8080 ; 

	$link = mysqli_connect("localhost","root","","adham");
	if (isset($_POST['submit']))
	

	$uid = $_SESSION['ID'] ;
	$qry= "SELECT * FROM profile WHERE uid = $uid"; 
	$result = mysqli_query($link,$qry) ; 
		while ($row=mysqli_fetch_array($result)) { 
		
		$education = $row['education'] ;
		$expY = $row['expY'] ; 
		$bio = $row['bio'] ; 
		$area = $row['area'] ;
		$image = $row['image'] ; 
		echo $education . " ".$expY . " ".$bio." ". $area ." ";
		////
		$txt=  '<img height="300" width="300" src="data:image;base64,'.$image.'"> ' ;
		
		echo $txt ; 

		
	
}

?>
		</body>
		</html>