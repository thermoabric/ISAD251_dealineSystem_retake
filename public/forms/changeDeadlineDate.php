 <?php

include_once "serverConnection.php";
//INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2')

if(isset($_POST['moveDeadlineChild'])){
//        $query = mysqli_query($conn, "INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2') ")
////        or die(mysql_error());
//        echo $deadLineInHtml;
//        echo $childNameInHtml4;
//        echo $dateTimeInHtml;
//        echo $adateTimeToSetHtml;
////     
        
        try {

            
            $statement = $link->prepare('CALL moveDeadlineChild(:adeadlineName,:achildName,:adateTime,:adateTimeToSet) ');

            $statement->bindParam(':adeadlineName', $deadLineInHtml);
            $statement->bindParam(':achildName', $childNameInHtml4);
            $statement->bindParam(':adateTime', $dateTimeInHtml);
            $statement->bindParam(':adateTimeToSet', $adateTimeToSetHtml);
            $statement->execute();
     

        } catch(PDOException $e) {
               echo $e->getMessage();
           }
        
        
}
?>


