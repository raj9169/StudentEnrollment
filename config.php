<?php 
$db = "studentenroll";
$username = "root";
$host = "localhost";
$pass = "";
$link =new mysqli($host,$username,$pass,$db);
if($link === false){
    die("Could not connect. " . mysqli_connect_error());
}
 

?>