<?php
include 'sqlConnectionString.php';
$conn = OpenCon();
echo "Connected Successfully";
CloseCon($conn);
?>