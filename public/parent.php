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
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;

}

tr:nth-child(even) {
    background-color: white;
}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-red w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="../public/Home.php" class="w3-bar-item w3-button w3-padding-large w3-hover-white">Home</a>
    <a href="../public/parent.php" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white">Parent</a>
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
    <p class="w3-xlarge">Welcome parent please select what you need to do  </p>
  
  
    <div class="w3-row-padding w3-margin-bottom">
        <div class="w3-half">
<!--        all forms here i idealy need to be converted so code can be reused -->
<!--         add deadline for all children-->
            <div class="w3-container w3-purple w3-padding-16" >
                <button onclick="document.getElementById('addDeadlineForAllChildren').style.display='block'" class=" w3-button  w3-hover-white">
                    <div class="w3-clear"></div>
                    <h2>add deadline</h2>
                </a>
            </div> 

            <div class="w3-container w3-blue w3-padding-16" >
                    <button onclick="document.getElementById('viewDeadLine').style.display='block'" class=" w3-button  w3-hover-white">
                        <div class="w3-clear"></div>
                        <h2>view appointments</h2>
                    </a>
            </div>  
            <div class="w3-container w3-purple w3-padding-16" >
                    <button onclick="document.getElementById('addNotesAndDetails').style.display='block'" class=" w3-button  w3-hover-white">
                        <div class="w3-clear"></div>
                        <h2>add details and notes to deadlines</h2>
                    </a>
            </div>
        </div>
<!-- left side-->
         <div class="w3-half">
            
            <div class="w3-container w3-blue w3-padding-16" >
                    <button onclick="document.getElementById('deletedeadline').style.display='block'"  class=" w3-button  w3-hover-white">
                        <div class="w3-clear"></div>
                        <h2>delete deadline </h2>
                    </a>
            </div>  
            <div class="w3-container w3-purple w3-padding-16" >
                    <button onclick="document.getElementById('addmember').style.display='block'"class=" w3-button  w3-hover-white">
                        <div class="w3-clear"></div>
                        <h2>add family member</h2>
                    </a>
            </div>
             <form method="post">
             <div class="w3-container w3-blue w3-padding-16" >
                    <button name="displayChildren" class=" w3-button  w3-hover-white">
                        <div class="w3-clear"></div>
                        <h2>show all children</h2>
                    </a>
            </div>
            </form>
             
        </div>

        
        
        
        
        
        
    </div>
</header>
<!--These are the forms for each function -->
    <!--add deadline form-->
    <div id="addDeadlineForAllChildren" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <span onclick="document.getElementById('addDeadlineForAllChildren').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close addDeadlineForAllChildren">×</span>
            <h5>please enter information below</h5> 
          </div>

          
            <div class="w3-section">
              <form method="post">
                    <label><b>enter deadline name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="deadlineIn2" id ="deadlineIn2"  required> 
                    
                    <label><b>enter date time as 0000-00-00 00:00:00</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="dateTimeIn2" id ="dateTimeIn2"  required> 
                    
                    <label><b>enter details</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="detailsIn2" id ="detailsIn2"  required> 
                    
                    <label><b>enter notes</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="notesIn2" id ="notesIn2"  required> 
                    
                    <label><b>enter child name if required</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="childNameIn2" id ="childNameIn2"  required> 
                    <?php 
                   
                    if(!empty($_POST['deadlineIn2'])){
                        
                    $input1 = $_POST['deadlineIn2'];
                    $input2 = $_POST['dateTimeIn2'];
                    $input3 = $_POST['detailsIn2'];
                    $input4 = $_POST['notesIn2'];
                    $input5 = $_POST['childNameIn2'];
                    
                    $data = [
                        'deadLineInHtml'=> $input1,
                        'dateTimeInHtml'=> $input2,
                        'detailInHtml'=> $input3,
                        'notesInHtml'=> $input4,
                        'childNameInHtml2'=> $input5
                    ];
                    extract($data);
                    require './forms/addDeadline.php';

                       
                       
                 }
                    
                    ?>
                    
                    <button name="addSingleChild" class="w3-block w3-green w3-section w3-padding ">add single for one child </button>
                    <button name="addAllChild" class="w3-block w3-green w3-section w3-padding ">add appointment for all children </button>
              
              </form>

            </div>
 
          </form>


          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('addDeadlineForAllChildren').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          </div>

        </div>
      </div>
    <!--viewdeadline form-->
    <div id="viewDeadLine" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <span onclick="document.getElementById('viewDeadLine').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close viewDeadLine">×</span>
            <h5>please enter information below</h5> 
          </div>

         
            <div class="w3-section">
              <form method="post">
                    <label><b>enter child name to find deadline </b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="childNameIn" id ="childNameIn"  required>  
                    <?php 
                    if(isset($_POST['childNameIn']) && !empty($_POST['childNameIn'])){
//                        $childNameInHtml = $_POST['childNameIn'];
                    $input = $_POST['childNameIn'];
                    
                    $data = [
                        'childNameInHtml'=> $input
                    ];
                    extract($data);
                    require './forms/viewDeadline.php';

                       
                       
                 }
                    
                    ?>
                    
                    <button name="submitChild" class="w3-block w3-green w3-section w3-padding ">load appointments </button>
              
              </form>

            </div>
          </form>

          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('viewDeadLine').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          </div>

        </div>
      </div>
    <!--edit details and notes-->
    <div id="addNotesAndDetails" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <span onclick="document.getElementById('addNotesAndDetails').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close addDeadlineForAllChildren">×</span>
            <h5>please enter information below</h5> 
          </div>

          
            <div class="w3-section">
              <form method="post">
                    <label><b>enter deadline name</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="deadlineIn3" id ="deadlineIn3"  required> 
                    
                    <label><b>enter child name </b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="childNameIn3" id ="childNameIn3"  required> 
                    
                    <label><b>enter date time as 0000-00-00 00:00:00</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="dateTimeIn3" id ="dateTimeIn3"  required> 
                    
                    <label><b>enter details</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="detailsIn3" id ="detailsIn3"  required> 
                    
                    <label><b>enter notes</b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="notesIn3" id ="notesIn3"  required> 
                    
                   
                    <?php 
                   
                    if(!empty($_POST['deadlineIn3'])){
                        
                    $input1 = $_POST['deadlineIn3'];
                    $input2 = $_POST['childNameIn3'];
                    $input3 = $_POST['dateTimeIn3'];
                    $input4 = $_POST['detailsIn3'];
                    $input5 = $_POST['notesIn3'];
                    
                    $data = [
                        'deadLineInHtml'=> $input1,
                        'dateTimeInHtml'=> $input3,
                        'detailInHtml'=> $input4,
                        'notesInHtml'=> $input5,
                        'childNameInHtml3'=> $input2
                    ];
                    extract($data);
                    require './forms/editDetailsAndNotes.php';

                       
                       
                 }
                    
                    ?>
                    
                    <button name="addNotesAndDetails" class="w3-block w3-green w3-section w3-padding ">add details and notes </button>
                    
              
              </form>

            </div>
 
          </form>


          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('addNotesAndDetails').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
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

         <div class="w3-section">
              <form method="post">
                    <label><b>enter deadline name </b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="deadlineIn3" id ="deadlineIn3"  required>  
                    
                    <label><b>enter deadline date time as 0000-00-00 00:00:00 </b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="dateTimeIn3" id ="dateTimeIn3"  required>  
                    
                    <label><b>enter child name if required </b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="childNameIn3" id ="childNameIn3"  required>  
                    <?php 
                   
                    if(!empty($_POST['deadlineIn3'])){
                        
                    $input1 = $_POST['deadlineIn3'];
                    $input2 = $_POST['dateTimeIn3'];
                    $input3 = $_POST['childNameIn3'];
                    
                    $data = [
                        'deadlineIn3Html'=> $input1,
                        'dateTimeIn3Html'=> $input2,
                        'childNameIn3Html'=> $input3
                    ];
                    extract($data);
                    require './forms/deleteDeadline.php';

                       
                       
                 }
                    
                    ?>
                    
                    <button name="deleteForSingleChild" class="w3-block w3-green w3-section w3-padding ">delete for single child  </button>
                    <button name="deleteForAllChild" class="w3-block w3-green w3-section w3-padding ">delete for all children</button>
              
              </form>

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

         
            <div class="w3-section">
              <form method="post">
                    <label><b>enter child name to find deadline </b></label>
                    <input class="w3-input w3-border w3-margin-bottom" type="text"  name="childNameIn2" id ="childNameIn2"  required>  
                    <?php 
                   
                    if(!empty($_POST['childNameIn2'])){
                        
                    $input = $_POST['childNameIn2'];
                    
                    $data = [
                        'childNameInHtml2'=> $input
                    ];
                    extract($data);
                    require './forms/addFamilyMember.php';

                       
                       
                 }
                    
                    ?>
                    
                    <button name="addmemberSave" class="w3-block w3-green w3-section w3-padding ">add member </button>
              
              </form>

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
        <p class="w3-xlarge">Here is the data you requested </p>
       <?php
            include "./forms/viewDeadline.php";
            include "./forms/viewChildren.php";
     
        ?>
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
