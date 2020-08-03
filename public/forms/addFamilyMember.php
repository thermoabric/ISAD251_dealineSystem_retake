 <?php

include_once "serverConnection.php";

if(isset($_POST['addmemberSave'])){
        $query = mysqli_query($conn, "INSERT INTO familymembers VALUES(NULL,'$childNameInHtml2') ")
        or die(mysql_error());
        
        
        
}
?>


