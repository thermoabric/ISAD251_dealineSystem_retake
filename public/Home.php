<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    include 'serverConnectionString.php';
   ?> 
    



<html lang="en">
<title>Appointments and deadlines manager</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../public/Home.php" class="w3-bar-item w3-button w3-padding-large w3-white">Home</a>
    <a href="../public/parent.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Parent</a>
    <a href="../public/child.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Child </a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="../public/Home.php" class="w3-bar-item w3-button w3-padding-large">Home</a>
    <a href="../public/parent.php" class="w-bar-item w3-button w3-padding-large">Parent</a>
    <a href="../public/child.php" class="w3-bar-item w3-button w3-padding-large">Child</a>
  </div>
</div>

<!-- Top menu -->
<header class="w3-container w3-red w3-center" style="padding:128px 16px">
  <h1 class="w3-margin w3-jumbo">Appointment and deadline tracker</h1>
  <p class="w3-xlarge">Welcome please select your account type </p>
    <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-half">
        
<!--        Parent area with button -->
      <div class="w3-container w3-green w3-padding-16" >
          <a href="../public/parent.php" class=" w3-button  w3-hover-white">
        <div class="w3-center"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-clear"></div>
        <h2>Parent</h2>
        </a>
      </div>
            
    </div>
<!--     child area with button -->
    <div class="w3-half">
      <div class="w3-container w3-blue w3-padding-16">
           <a  href="../public/child.php" class=" w3-button  w3-hover-white">
        <div class="w3-center"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-clear"></div>
        <h2>Child</h2>
        </a>
      </div>
  </div>
</header>

<!-- bottom grid -->
<div class="w3-row-padding w3-padding-64 w3-container" >
  <div class="w3-content">
      <center>
    	<h1 class="w3-margin w3-jumbo">Have a wonderful day ! </h1>
        </center>
  </div>
</div>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Created by Jake kirk</h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
 </div>
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>

</body>
</html>





        
    
