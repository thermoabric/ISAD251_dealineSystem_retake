 <?php

include_once "serverConnection.php";
//INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2')
if(isset($_POST['addmemberSave'])){
//        $query = mysqli_query($conn, "INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2') ")
//        or die(mysql_error());
        try {

            
            $statement = $link->prepare('CALL addFamilyMember(:achildName) ');

            $statement->bindParam(':achildName', $childNameInHtml2);
            $statement->execute();
     

        } catch(PDOException $e) {
               echo $e->getMessage();
           }
        
        
}
?>


