<?php
include_once "serverConnection.php";
include('./parent.php');
  
$result = mysqli_query($conn,"CALL getAllDeadlinesAndAppointments ('$childNameInHtml')");
echo $childNameInHtml;
?>
<!DOCTYPE html>
<?php
if(isset($_POST["submitChild"])) { 
?>
    
<html>
 <head>
 <title> Retrive data</title>
 </head>
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
</html>
<?php
}
?>