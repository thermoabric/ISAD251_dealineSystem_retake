<!DOCTYPE html>
<!--
this the is the parent page which has the server functions to do the following 
-->

<?php
     



        ?>






<html lang="en">
<title>Appointments and deadlines manager</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!--pop up box -->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
    <a href="../public/Home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="../public/parent.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white">Parent</a>
    <a href="../public/child.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Child </a>

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
    <p class="w3-xlarge">Welcome parent please select what you need to do  </p>
  
  
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3">
<!--        all forms here i idealy need to be converted so code can be reused -->
<!--         add deadline for all children-->
            <div class="w3-container w3-purple w3-padding-16" >
                <button onclick="document.getElementById('enterdeadlinedetails').style.display='block'" class=" w3-button  w3-hover-white">
                    <div class="w3-clear"></div>
                    <h2>add deadline details</h2>
                </a>
            </div> 

            <div class="w3-container w3-blue w3-padding-16" >
                    <button onclick="document.getElementById('viewDeadLine').style.display='block'" class=" w3-button  w3-hover-white">
                        <div class="w3-clear"></div>
                        <h2>view deadlines</h2>
                    </a>
            </div>  
            <div class="w3-container w3-purple w3-padding-16" >
                    <button onclick="document.getElementById('addToNotes').style.display='block'" class=" w3-button  w3-hover-white">
                        <div class="w3-clear"></div>
                        <h2>show task completed </h2>
                    </a>
            </div>
            <div class="w3-container w3-blue w3-padding-16" >
                    <button onclick="document.getElementById('movedeadline').style.display='block'"  class=" w3-button  w3-hover-white">
                        <div class="w3-clear"></div>
                        <h2 >move deadline <h2>
                    </a>
            </div> 
        </div>

        
        
        
        
        
        
    </div>
</header>
<!--These are the forms for each function -->
    <!--enter deadline details-->
    <div id="enterdeadlinedetails" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <span onclick="document.getElementById('enterdeadlinedetails').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close enterdeadlinedetails">×</span>
            <h5>please enter information below</h5> 
          </div>

          <form class="w3-container" action="/action_page.php">
            <div class="w3-section">
                
             <label><b>please enter your name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="childname" name="childName" required>
                
              <label><b>Deadline name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter deadline name" name="deadlineName" required>

              <label><b>Date and time in format year-month-day hour:min:sec</b></label>
              <input class="w3-input w3-border" type="text" placeholder="Enter date and time" name="dateTime" required>



              <button class="w3-button w3-block w3-green w3-section w3-padding" type="loaddeadline">load deadline</button>
              
             
              
              <label><b>Notes </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter notes" name="notes" required>
              
              
              <label><b>Details </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter details" name="details" required>
              
              
              <button class="w3-button w3-block w3-green w3-section w3-padding" type="savechanges">save changes </button>
              
            </div>
          </form>

          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('enterdeadlinedetails').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          </div>

        </div>
      </div>
    <!--viewdeadline -->
    <div id="viewDeadLine" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <span onclick="document.getElementById('viewDeadLine').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close viewDeadLine">×</span>
            <h5>please enter information below</h5> 
          </div>

          <form class="w3-container" action="/action_page.php">
            <div class="w3-section">

              <label><b>Child name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="enter child name to find deadline" name="childname" required>  
              
              <button  type="button" class="w3-block w3-green w3-section w3-padding">next deadline</button>

              <label><b>Deadline name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="there is no deadline name" name="deadlineName" required>

              <label><b>Date and time in format year-month-day hour:min:sec</b></label>
              <input class="w3-input w3-border" type="text" placeholder="there is no date or time" name="dateTime" required>

              <label><b>Details </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="there are no details" name="details" required>

              <label><b>Notes </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="there are no notes" name="notes" required>


              
            </div>
          </form>

          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('viewDeadLine').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          </div>

        </div>
      </div>
    <!--edit details and notes-->
    <div id="editDetailsAndNotes" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <span onclick="document.getElementById('editDetailsAndNotes').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close editDetailsAndNotes">×</span>
            <h5>please enter information below</h5> 
          </div>

          <form class="w3-container" action="/action_page.php">
            <div class="w3-section">

    <!--            user enteres these vaules -->
              <label><b>Enter Child name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="enter child name" name="childname" required>  

              <label><b>Enter Deadline name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="there is no deadline name" name="deadlineName" required>

              <label><b> Enter Date and time in format year-month-day hour:min:sec</b></label>
              <input class="w3-input w3-border" type="text" placeholder="there is no date or time" name="dateTime" required>

              
              <button  type="button" class="w3-block w3-green w3-section w3-padding">next deadline</button>
    <!--          user can now edit these values-->


              <label><b>Details add or edit if required </b></label>
              <input class="w3-input w3-border" type="text" placeholder="there are no details" name="details" required>

              <label><b>Notes add or edit if required </b></label>
              <input class="w3-input w3-border" type="text" placeholder="there are no notes" name="notes" required>


              <button  type="button" class="w3-block w3-green w3-section w3-padding">Submit and save</button>
              
            </div>
          </form>

          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('editDetailsAndNotes').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          </div>

        </div>
      </div>
    <!-- delete deadline-->
    <div id="deletedeadline" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <span onclick="document.getElementById('deletedeadline').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close deletedeadline">×</span>
            <h5>please enter information below</h5> 
          </div>

          <form class="w3-container" action="/action_page.php">
            <div class="w3-section">

              <label><b>Child name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="enter child name" name="childname" required>  
              
              

              <label><b>Deadline name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="enter deadline name" name="deadlineName" required>

              <label><b>Date and time in format year-month-day hour:min:sec</b></label>
              <input class="w3-input w3-border" type="text" placeholder="enter date time" name="dateTime" required>

              <button  type="deletedeadline" class="w3-block w3-green w3-section w3-padding">delete deadline</button>


              
            </div>
          </form>

          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('deletedeadline').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          </div>

        </div>
      </div>
    <!-- add new family member-->
    <div id="addmember" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <span onclick="document.getElementById('addmember').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close addmember">×</span>
            <h5>please enter information below</h5> 
          </div>

          <form class="w3-container" action="/action_page.php">
            <div class="w3-section">

              <label><b>Child name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="enter child name" name="childname" required>  
              
          

              <button  type="addmember" class="w3-block w3-green w3-section w3-padding">add member</button>


              
            </div>
          </form>

          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('addmember').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          </div>

        </div>
      </div>
    
    


      

<!-- main grid -->
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
