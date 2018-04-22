var loggedIn ; 
function loggedOrNot()
{
	if (loggedIn)
	{
		
	 var login = document.getElementById("login form") ;
	var logged = document.createElement('p') ; 
	var navbar = document.getElementById('navbar') ; 
	navbar.append(logged); 
	login.style.display = 'none' ; 
	logged.textContent = "Welcome Back !" ;
	}
	
}

function login(){

        var login = document.getElementById("login form") ;
var logged = document.createElement('p') ; 
var navbar = document.getElementById('navbar') ; 
navbar.append(logged); 
    
	
	
	
    login.style.display = 'none' ; 
	logged.textContent = "Welcome Back !" ;
    logged.style.color = "white" ; 
    logged.style.position = "fixed " ; 
    logged.style.left = "950px" ;
    logged.style.top = "15px" ; 
	loggedIn = true ; 
	
          }