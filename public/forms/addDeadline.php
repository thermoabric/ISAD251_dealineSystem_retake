 <?php

include_once "serverConnection.php";
//INSERT INTO deadlinesandappointments(deadlineId, deadlineName, childName, dateTimeset, details, notes) VALUES(NULL,'$deadLineInHtml','$dateTimeInHtml','$detailInHtmll','$notesInHtml','$childNameInHtml')
if(isset($_POST['addSingleChild'])){


        $query = mysqli_query($conn,"INSERT INTO 'deadlinesandappointments'(deadlineId, deadlineName, childName, dateTimeset, details, notes) 
                 .VALUES(NULL,'$deadLineInHtml','$childNameInHtml2','$dateTimeInHtml','$detailInHtml','$notesInHtml'");
//        or die(mysql_error());
        
}
if(isset($_POST['addAllChild'])){
        $query = mysqli_query($conn, "INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2') ")
        or die(mysql_error());
        
        
        
}
?>

