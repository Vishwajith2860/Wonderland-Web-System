<?php 
session_start();

	include("Connection.php");
	include("Functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
			$user_id = random_num(20);
			$query = "insert into users(user_id, user_name, email, password, address, contact) values ('$user_id','$user_name','$email','$password','$address','$contact')";

			mysqli_query($con, $query);

			header("Location:Login.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
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
          <li><a href="Reservatio.php">Reservation</a></li>
          <li><a href="Activities.html">Activities</a></li>
          <li><a href="Package.html">Packages</a></li>
          <li><a href="About.html">About</a></li>
          </ul>

          
  <!--The slideshow container-->         
         
 <div class="slideshow-container">
          
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="WebImages/p1.jpg" style="width:100%;" >
            <div class="text">Caption Text</div>
          </div>
          
        


          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="WebImages/p2.jpg" style="width:100%">
            <div class="text">Caption Two</div>
          </div>
          
          <div class="mySlides fade">
            <div class="numbertext"></div>
            <img src="WebImages/p3.jpg" style="width:100%">
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
          

<!--Signup form styles-->

 <style type="text/css">

#text{

height: 55px;
border-radius: 12px;
padding: 4px;
border: solid thin #aaa;
width: 100%;
  
}

#button{

position:absolute;
left:345px;
top:620px;
padding: 14px;
width: 200px;
color: white;
background-color: black;
border: none;
border-radius: 5px;
font-size: 16px;

}

#box{
position:absolute;
left: 510px;
top: 1500px;
height:780px;
background-color: brown;
margin: auto;
width: 900px;
padding: 30px;
border-radius: 15px;
opacity:95%;

}

label, input {
  display: block;
}

label {
  margin-bottom: 20px;
}

a{
  font-size: 20px;
  text-transform: uppercase;
  text-decoration: none;
  letter-spacing: 0.15em;
  display: inline-block;
  padding: 20px 40px;
  position: relative;
}


  </style>

<!--Signup form create-->
	
	<div id="box">
		
		<form method="post">
			<div style="font-size: 30px;  margin: 20px; color: black; text-align: center;">Signup Here!</div>

			<label>
        <input id="text" type="text" placeholder="Enter User Name"  name="user_name">
      </label>

      <label>
	  	<input id="text" type="text" placeholder="Enter E-mail" name="email">
      </label>

      <label>
	  	<input id="text" type="password" placeholder="Enter Password" name="password">
      </label>

      <label>
	  	<input id="text" type="text" placeholder="Enter Home Address" name="address">
      </label>

      <label>
      <input id="text" type="text" placeholder="Enter Contact Number" name="contact">
      </label>

      
			<input id="button" type="submit" value="Signup"><br><br>

			<a href="Login.php">Click to Login</a><br><br> 
		</form>
	</div>
</body>
</html>

