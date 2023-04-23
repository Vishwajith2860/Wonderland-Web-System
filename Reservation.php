<DOCTYPE html>
    <html>
    <head>
    
    <title>Reservation Page</title>

    <style>
        html{
              background:url(WebImages/Waterpark.jpg) center fixed;
              background-size: cover;
        }
        
        </style>
        
        <link rel='stylesheet' type='text/css' href='WonderlandS.css'/>
       

       <meta charset="UTF-8">
       <title>Booking</title>
      
       <link href="https://fonts.googleapis.com/css?family=Raleway:400,600,700,900" rel="stylesheet">

      

    </head>

    <style media="screen">


        .logo{
        
            display: inline-block;
            position: absolute;
            left: 25px;
            top: 30px;
          
        }
        
        .logo img{
        
            width: 240px;
            height: 240px;
            
        }
     </style>   

    <body>
    <form method="post" action="<?php echo( htmlspecialchars( $_SERVER['PHP_SELF']))?>">
   
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



<!--Reservation form container-->


<div class="container">
<div class="container-time">
<h2 class="heading">Time Open</h2>
<h3 class="heading-days">Monday-Friday</h3>
<p>8am - 5pm</p>
 
<h3 class="heading-days">Saturday and Sunday</h3>
<p>8am - 3pm</p>
  
 <hr>
                
<h4 class="heading-phone">Call Us: 0812219300</h4>
</div>
                
<div class="container-form">
<form action="#">
<h2 class="heading heading-yellow">Reserve Here!</h2>
                    
<div class="form-field">
<p>First Name</p>
<input type="text" placeholder="Enter Your First Name" name="firstname">
</div>
<div class="form-field">
<p>Last Name</p>
<input type="text" placeholder="Enter Your Last Name" name="lastname">
</div>
<div class="form-field">
<p>Address</p>
<input type="text" placeholder="Enter Your Address" name="address">
</div>
<div class="form-field">
<p>Your E-mail</p>
<input type="email" placeholder="Enter Your E-mail" name="email">
</div>
<div class="form-field">
<p>Date</p>
<input type="date" name="date">
</div>
<div class="form-field" name="time">
<p>Time</p>
<input type="time" name="time">
</div>
<div class="form-field">
<p>How many people?</p>
<select name="select" id="#">
 <option value="1">1 person</option>
 <option value="2">2 persons</option>
<option value="3">3 persosn</option>
<option value="4">4 persons</option>
<option value="5">5 persons</option>
<option value="5+">5+ persons</option>
</select>
</div>
<div class="form-field">
<p>Package Code</p>
<input type="text" placeholder="Enter Your Package Code" name="packagecode">
</div>       


<button class="btn">Book Now!</button>
</form>
</div>
</div>
                          

<!--connecting to the msql database>

<?php
     
   $serverName="localhost";
   $dbName    ="wonderland_theme_park";
   $user      ="root";
   $password  ="";

   try
   {
       if($_SERVER['REQUEST_METHOD'] == "POST")
       {
          
                     
       $conn =new PDO("mysql:host=$serverName;dbname=$dbName",$user,$password);
       $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
       $query ="INSERT INTO `reservation`(`cusfirstname`, `cuslastname`, `address`, `email`, `date`, `time`, `peoplenum`,`packagecode`) VALUES  (?,?,?,?,?,?,?,?)";
       $statment= $conn->prepare($query);
       $statment->execute([$_POST['firstname'],$_POST['lastname'],$_POST['address'],$_POST['email'],$_POST['date'],$_POST['time'],$_POST['select'],$_POST['packagecode']]);
       }
       {
       echo '';
    }
        
}
catch(PDOException $e )
{
    echo("Fail to coonect "+ $e->getMessage());
}
?>

</body>
</html>
