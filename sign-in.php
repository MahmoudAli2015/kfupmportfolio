<?php



$user = 'root' ; 
    $password = '' ;
    $db = 'adham' ; 
    $host = 'localhost' ; 
    $port = 8080 ; 

    $link = mysqli_connect("localhost","root","","adham") ;
    if (isset($_POST['submit']))
    {
        $fname = $_POST['firstName'] ;
        $lname = $_POST['lastName'] ; 
        $email = $_POST['email'] ; 
        $password = $_POST['password'] ; 
        $qry = "INSERT INTO infot(fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')"; 
        $result = mysqli_query($link,$qry) ; 

        if($result)
        {
            echo "completed successfully";
        }
        else
        {
            echo "failed";
        }
    }
?>