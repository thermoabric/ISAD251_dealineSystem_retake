<?php
$url='127.0.0.1:3306';
$username='root';
$password='';
$dbname = "isad251";

$conn=mysqli_connect($url,$username,$password,"isad251");
$link = new PDO("mysql:host=$url;dbname=$dbname", $username, $password); 
if(!$conn){
 die('Could not Connect My Sql:' .mysql_error());
}

?>
