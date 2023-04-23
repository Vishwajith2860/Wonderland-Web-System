
<?php 
session_start();

	include("Connection.php");
	include("Functions.php");
    
	$user_data = check_login($con);

?>

<DOCTYPE html>
<html>
<head>

<title>Home Page</title>

<style>
html{
      background:url(WebImages/Waterpark.jpg) center fixed;
      background-size: cover;
}

</style>

<link rel='stylesheet' type='text/css' href='WonderlandS.css' />

</head>
<style media="screen">


.logo{

    display: inline-block;
    position: absolute;
    left: 25px;
    
}

.logo img{

    width: 240px;
    height: 240px;
    
}


</style>

<body>

<!--Website Logo-->
    <div class="logo"> 
    <img src="Wonderland Logo Black.png">
    </div>

 <!--The navigation panel-->         
          
        <ul class="nav-area">
          <li><a href="Wonderland.php">Home</a></li>
          <li><a href="Reservation.php">Reservation</a></li>
          <li><a href="Activities.html">Activities</a></li>
          <li><a href="Package.html">Packages</a></li>
          <li><a href="About.html">About</a></li>
          </ul>

          
 <!--The slideshow container-->         
          
          <div class="slideshow-container">
          
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="p1.jpg" style="width:100%;" >
            <div class="text">Caption Text</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="p2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="p3.jpg" style="width:100%">
            <div class="text">Caption Three</div>
          </div>
          
          </div>
          <br>
          
          <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
          </div>
          
          <script>
          var slideIndex = 0;
          showSlides();
        
    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 5000); 
          }
 </script>
          

<a href="Logout.php">Logout</a>  

<br> Hello, <?php echo $user_data['user_name']; ?>


    
      </body>
    </html>
    



