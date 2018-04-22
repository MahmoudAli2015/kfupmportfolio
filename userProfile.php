<?php session_start(); ?>
<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Foundation | Welcome</title>
        <link rel="stylesheet" href="foundation.css" />
        <link rel="stylesheet" href="bootstrap.css"/>
        <script src="js/vendor/modernizr.js"></script>
    </head>
    <body>

            

                <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">KFUPM Portfoio</a>
                </div>
                <div id="navbar" class="navbar-collapse collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#">Dashboard</a>
                        </li>
                        <li>
                            <a href="#">Profile</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-3 col-md-2 sidebar">
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <!-- Navigation -->
                        <!-- End Navigation -->
                    </div>
                </div>
                <br>
                <br>
                <div class="row">
                    <div class="large-12 columns">
                        <!-- Desktop Slider -->
                        <div class="hide-for-small-only">
                            <div id="featured">
</div>
                        </div>
                        <!-- End Desktop Slider -->
                        <!-- Mobile Header -->
                        <div class="row">
                            <div class="small-12 show-for-small-only">
                                <br>
                                <img src="http://placehold.it/1000x600&text=For Small Screens" />
                            </div>
                        </div>
                        <!-- End Mobile Header -->
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="row">
                            <!-- Thumbnails -->
                            <div class="large-3 small-6 columns">
                                <img src="http://placehold.it/250x250&amp;text=Thumbnail">
                                <h6 class="callout">Description</h6>
                            </div>
                            <div class="large-3 small-6 columns">
                                <h6 id="trial" class="callout">Personal Info :&nbsp;</h6>
                                <p></p>
                                <p></p>
                                <p></p>
                                <p>Name :&nbsp;</p>
                                <p>ID :&nbsp;</p>
                                <p>Address :&nbsp;</p>
                                <p>Phone Number :&nbsp;</p>
                                <p>Email :&nbsp;</p>
                            </div>
                            <div class="large-3 small-6 columns">
                                <h6 class="callout">Publications</h6>
                                <p>Books :&nbsp;</p>
                                <p>Thesis :&nbsp;</p>
                            </div>
                            <div class="large-3 small-6 columns">
                                <h6 class="callout">Memberships</h6>
                                <p>Professional Organizations :&nbsp;</p>
                            </div>
                            <!-- End Thumbnails -->
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="large-12 columns">
                        <div class="row">
                            <!-- Content -->                             
                            <div class="large-8 columns">
                                <div class="callout">
                                    <div class="row">
                                        <div class="large-6 small-6 columns">
                                            <h4>Profile Info</h4>
                                            <hr>
                                            <h5 class="subheader">Education :&nbsp;</h5>
                                            <h5 class="subheader">Department :&nbsp;</h5>
                                            <h5 class="subheader">Experiance Years :&nbsp;</h5>
                                            <div class="show-for-small-only" align="center">
                                                <a href="#" class="small radius button">Update Portfolio</a>
                                                <br>
                                                <a href="#" class="small button">Call To Action!</a>
                                            </div>
                                        </div>
                                        <div class="large-6 small-6 columns">
                                            <p>Bio :&nbsp;</p>
                                        </div>
                                    </div>
                                </div>
                            </div>                             
                            <div class="large-4 columns hide-for-small-only">
                                <h4>User Menu&nbsp;</h4>
                                <hr>
                                <a class="large button expand" href="dashboard.html">
                     Update Portfolio </a>
                                <a class="large button expand" href="resume.html">
                      Generate Resume </a>
                                <a class="large button expand" href="#">
                      Manage Porfolio </a>
                                <a class="large button expand" href="importPorfolio.html">
                      Import Portfolio </a>
                                <a class="large button expand" href="#">
                      Export Portfolio</a>
                       
        
            <?php include'personProfile.php' ; ?>
        
                      <div id="trial1"></div>
                      
  <!--> <script>
function showUser(str) {
  if (str=="") {
    document.getElementById("generate").innerHTML="";
    return;
  } 
  if (window.XMLHttpRequest) {
    // code for IE7+, Firefox, Chrome, Opera, Safari
    xmlhttp=new XMLHttpRequest();
  } else { // code for IE6, IE5
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("generate").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","personProfile.php?q="+str,true);
  xmlhttp.send();
}
</script> </-->


                            </div>                             
                            <!-- End Content -->
                        </div>
                    </div>
                </div>
                <!-- Footer -->
                <footer class="row">
                    <div class="large-12 columns">
                        <hr>
                        <div class="row">
                            <div class="large-6 columns">
                                <p>� Copyright no one at all. Go to town.</p>
                            </div>
                            <div class="large-6 columns">
                                <ul class="menu float-right">
                                    <li>
                                        <a href="#">Search Portfolio</a>
                                    </li>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                    <li>
                                        <a href="#"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </footer>
                <script src="js/vendor/jquery.min.js"></script>
                <script src="js/foundation.min.js"></script>
                <script>
          $(document).foundation();
        </script>
    </body>
</html>