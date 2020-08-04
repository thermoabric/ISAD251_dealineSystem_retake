 <?php

include_once "serverConnection.php";
//INSERT INTO deadlinesandappointments(deadlineId, deadlineName, childName, dateTimeset, details, notes) VALUES(NULL,'$deadLineInHtml','$dateTimeInHtml','$detailInHtmll','$notesInHtml','$childNameInHtml')
if(isset($_POST['addSingleChild'])){

        try {

//            $name1 = "francis";
//            $name2 = "francis";
//            $name3 = "1111-11-11 11:11:11";
//            $name4 = "dsadsad";
//            $name5 ="sdsadsad";

            $statement = $link->prepare('CALL addDeadLine(:aDeadLineName,:achildName,:adateTimeset,:adetails,:anotes) ');
            echo $deadLineInHtml;
            echo $childNameInHtml2;
            echo $dateTimeInHtml;
            echo $dateTimeInHtml;
            echo $detailInHtml;
            echo $notesInHtml;
            $statement->bindParam(':aDeadLineName', $deadLineInHtml);
            $statement->bindParam(':achildName', $childNameInHtml2);
            $statement->bindParam(':adateTimeset', $dateTimeInHtml);
            $statement->bindParam(':adetails', $detailInHtml);
            $statement->bindParam(':anotes', $notesInHtml);
            $statement->execute();




        } catch(PDOException $e) {
               echo $e->getMessage();
           }

}
if(isset($_POST['addAllChild'])){
        $query = mysqli_query($conn, "INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2') ")
        or die(mysql_error());
        
        
        
}
?>

