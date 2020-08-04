<?php
include "serverConnection.php";

//$sql = "INSERT INTO deadlinesandappointments (deadlineId, deadlineName, childName, dateTimeset,details, notes) VALUES (?,?,?,?,?,?)";
//$stmt= $conn->prepare($sql);
//$stmt->execute(["NULL", "surname", "sex","1111-11-11 11:11:11", "sdsadas", "sdasdsa"]);
       

 try {

     $name1 = "francis";
     $name3 = "1111-11-11 11:11:11";
     $name4 = "dsadsad";
     $name5 ="sdsadsad";
             
     $statement = $link->prepare('CALL createSharedDeadline(:aDeadLineName,:adateTimeset,:adetails,:anotes) ');
    
     $statement->bindParam(':aDeadLineName', $name1);
     $statement->bindParam(':adateTimeset', $name3);
     $statement->bindParam(':adetails', $name4);
     $statement->bindParam(':anotes', $name5);
     $statement->execute();
     
     
     
     
 } catch(PDOException $e) {
        echo $e->getMessage();
    }
         
?>