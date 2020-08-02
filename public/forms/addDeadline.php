<?php


 ?>



<html lang="en">
  <div id="addDeadlineForAllChildren" class="w3-modal">
        <div class="w3-modal-content w3-card-4 w3-animate-zoom" style="max-width:600px">

          <div class="w3-center"><br>
            <span onclick="document.getElementById('addDeadlineForAllChildren').style.display='none'" class="w3-button w3-xlarge w3-transparent w3-display-topright" title="Close addDeadlineForAllChildren">×</span>
            <h5>please enter information below</h5> 
          </div>

          <form class="w3-container" action="/action_page.php">
            <div class="w3-section">

              <label><b>Deadline name </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter deadline name" name="deadlineName" required>

              <label><b>Date and time in format year-month-day hour:min:sec</b></label>
              <input class="w3-input w3-border" type="text" placeholder="Enter date and time" name="dateTime" required>

              <label><b>Details </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter details" name="details" required>

              <label><b>Notes </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter notes" name="notes" required>





              <button class="w3-button w3-block w3-green w3-section w3-padding" type="add for all children ">add for all children</button>
              
              <label><b>Add for only this child </b></label>
              <input class="w3-input w3-border w3-margin-bottom" type="text" placeholder="Enter childname" name="childname" required>
              <button class="w3-button w3-block w3-green w3-section w3-padding" type="add ">add </button>
              
            </div>
          </form>

          <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
            <button onclick="document.getElementById('addDeadlineForAllChildren').style.display='none'" type="button" class="w3-button w3-red">Cancel</button>
          </div>

        </div>
      </div>
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 *
</html>
