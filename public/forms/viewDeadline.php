<?php
    include_once "serverConnection.php";
    error_reporting(0);
    // thinks childnameinhtml undefined its not 
    

     $result = $conn->query(" SELECT * FROM deadlinesandappointments WHERE childName = ('$childNameInHtml') ");
    
    // bug with procedure only printing to pop up and not to parent page ? 
    //$result = mysqli_query($conn," CALL getAllDeadlinesAndAppointments('$childNameInHtml') ");
    
?>

<?php
    if(isset($_POST["submitChild"])) { 
?>
                <!DOCTYPE html>
        <html>
                <head>
                    <title> Retrieve data</title>
                </head>
               <body>
                        <?php
                        if (mysqli_num_rows($result) > 0) {
                        ?>
                          <table>

                          <tr>
<!--                            <td>deadlineId</td>-->
                            <td>deadlineName</td>
                            <td>childName</td>
                            <td>dateTimeSet</td>
                            <td>details</td>
                            <td>notes</td>
                          </tr>
                        <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                        <tr>
<!--                            <td><?php //echo $row["deadlineId"]; ?></td>-->
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
        </html>













<?php
    }
?> 