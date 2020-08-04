 <?php

include_once "serverConnection.php";
//INSERT INTO deadlinesandappointments(deadlineId, deadlineName, childName, dateTimeset, details, notes) VALUES(NULL,'$deadLineInHtml','$dateTimeInHtml','$detailInHtmll','$notesInHtml','$childNameInHtml')
if(isset($_POST['addSingleChild'])){
        $dateTimeCheck = $dateTimeInHtml;
//        local varible needed as otherwise does not like to transfer over datetime
        try {


            $statement = $link->prepare('CALL addDeadLine(:aDeadLineName,:achildName,:adateTimeset,:adetails,:anotes) ');
            
            $statement->bindParam(':aDeadLineName', $deadLineInHtml);
            $statement->bindParam(':achildName', $childNameInHtml2);
            $statement->bindParam(':adateTimeset', $dateTimeCheck);
            $statement->bindParam(':adetails', $detailInHtml);
            $statement->bindParam(':anotes', $notesInHtml);
            $statement->execute();




        } catch(PDOException $e) {
               echo $e->getMessage();
           }

}
if(isset($_POST['addAllChild'])){
        try {

    
             
            $statement = $link->prepare('CALL createSharedDeadline(:aDeadLineName,:adateTimeset,:adetails,:anotes) ');

            $statement->bindParam(':aDeadLineName', $deadLineInHtml);
            $statement->bindParam(':adateTimeset', $dateTimeInHtml);
            $statement->bindParam(':adetails', $detailInHtml);
            $statement->bindParam(':anotes', $notesInHtml);
            $statement->execute();




        } catch(PDOException $e) {
               echo $e->getMessage();
           }
         
        
        
        
}
?>

