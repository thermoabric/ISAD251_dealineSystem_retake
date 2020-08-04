 <?php

include_once "serverConnection.php";
//INSERT INTO deadlinesandappointments(deadlineId, deadlineName, childName, dateTimeset, details, notes) VALUES(NULL,'$deadLineInHtml','$dateTimeInHtml','$detailInHtmll','$notesInHtml','$childNameInHtml')
if(isset($_POST['addSingleChild'])){

        // $stmt->bindValue($deadLineInHtml,$childNameInHtml2,$dateTimeInHtml,$detailInHtml,$notesInHtml);
         $sql = 'CALL addDeadline(?,?,?,?,?)';
         $stmt = $conn->prepare($sql);
        
         
         
         
         
         $stmt->bindValue(1, $deadLineInHtml,PDO::PARAM_STR,32);
         $stmt->bindValue(2, $childNameInHtml2,PDO::PARAM_STR,32);
         $stmt->bindValue(3, $dateTimeInHtml,PDO::PARAM_STR,32);
         $stmt->bindValue(4, $detailInHtml,PDO::PARAM_STR,32);
         $stmt->bindValue(5, $notesInHtml,PDO::PARAM_STR,32);
           
    
         $stmt->execute();
         echo $stmt;
        
//        or die(mysql_error());
        
}
if(isset($_POST['addAllChild'])){
        $query = mysqli_query($conn, "INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2') ")
        or die(mysql_error());
        
        
        
}
?>

