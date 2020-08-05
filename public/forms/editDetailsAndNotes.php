 <?php

include_once "serverConnection.php";
//INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2')
if(isset($_POST['addNotesAndDetails'])){
//        $query = mysqli_query($conn, "INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2') ")
//        or die(mysql_error());
        echo $deadLineInHtml;
        echo $childNameInHtml3;
        echo $dateTimeInHtml;
        echo $detailInHtml;
        echo $notesInHtml;
        
        try {

            
            $statement = $link->prepare('CALL editDetailsOfFamilyMemberANDchildAddDetails(:adeadlineName,:achildName,:adateTime,:adetails,:aNotes) ');

            $statement->bindParam(':adeadlineName', $deadLineInHtml);
            $statement->bindParam(':achildName', $childNameInHtml3);
            $statement->bindParam(':adateTime', $dateTimeInHtml);
            $statement->bindParam(':adetails', $detailInHtml);
            $statement->bindParam(':aNotes', $notesInHtml);
            $statement->execute();
     

        } catch(PDOException $e) {
               echo $e->getMessage();
           }
        
        
}
?>


