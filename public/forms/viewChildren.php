<?php
include_once "serverConnection.php";





$result = mysqli_query($conn," SELECT * FROM familymembers");
?>

    <html>
        

            <body>
                <?php
                if (mysqli_num_rows($result) > 0) {
                    ?>
                    <table>
                        <tr>
                          <td>childId</td>
                          <td>childname</td>
                          
                        </tr>
                        <?php
                        $i=0;
                        while($row = mysqli_fetch_array($result)) {
                        ?>
                            <tr>
                                <td><?php echo $row["childId"]; ?></td>
                                <td><?php echo $row["childname"]; ?></td>
                             
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
    
