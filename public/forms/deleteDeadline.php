 <?php

include_once "serverConnection.php";
//INSERT INTO deadlinesandappointments(deadlineId, deadlineName, childName, dateTimeset, details, notes) VALUES(NULL,'$deadLineInHtml','$dateTimeInHtml','$detailInHtmll','$notesInHtml','$childNameInHtml')
$dateTimeCheck = $dateTimeIn3Html;
if(isset($_POST['deleteForSingleChild'])){
        
//        echo $dateTimeCheck;
//        echo $deadlineIn3Html;
//        echo $childNameIn3Html;
//        local varible needed as otherwise does not like to transfer over datetime
        try {


            $statement = $link->prepare('CALL deleteDeadline(:aDeadLineName,:achildName,:adateTimeset )');
            
            $statement->bindParam(':aDeadLineName', $deadlineIn3Html);
            $statement->bindParam(':achildName', $childNameIn3Html);
            $statement->bindParam(':adateTimeset', $dateTimeCheck );
           
            $statement->execute();




        } catch(PDOException $e) {
               echo $e->getMessage();
           }

}
if(isset($_POST['deleteForAllChild'])){
        try {
//            echo $dateTimeCheck;
//            echo $deadlineIn3Html;
            


            $statement = $link->prepare('CALL deleteDeadlineAllChild(:aDeadLineName,:adateTimeset) ');
            
            $statement->bindParam(':aDeadLineName', $deadlineIn3Html);
            $statement->bindParam(':adateTimeset', $dateTimeCheck );
           
            $statement->execute();




        } catch(PDOException $e) {
               echo $e->getMessage();
           }
         
        
        
        
}
?>



     
