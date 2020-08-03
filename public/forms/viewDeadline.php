<?php
include_once "serverConnection.php";




//$result = mysqli_query($conn,"CALL getAllDeadlinesAndAppointments ($childNameInHtml)");

$result = mysqli_query($conn," SELECT * FROM deadlinesandappointments WHERE childName = '$childNameInHtml' ");
?>



<?php
if(isset($_POST["submitChild"])) { 
?>

    <html>
        <?php
        if(isset($_POST['childNameIn']) && !empty($_POST['childNameIn'])){
          ?>

            <body>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    ?>


                    <table>

                        <tr>
                          <td>deadlineId</td>
                          <td>deadlineName</td>
                          <td>datetimeset</td>
                          <td>childName</td>
                          <td>details</td>
                          <td>notes</td>
                        </tr>
                        <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["deadlineId"]; ?></td>
                                <td><?php echo $row["deadlineName"]; ?></td>
                                <td><?php echo $row["childName"]; ?></td>
                                <td><?php echo $row["dateTimeset"]; ?></td>
                                <td><?php echo $row["details"]; ?></td>
                                <td><?php echo $row["notes"]; ?></td>
                            </tr>
                        <?php
                        $i++;
                        }
                        ?>
                    </table>
                <?php
                }
                else{
                    echo "No result found";
                }
                ?>
     
            </body>
        <?php
        }
        ?>    
    </html>
    
<?php   
}
?> 

?>
