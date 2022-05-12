<?php
error_reporting(0);
$host="localhost";
$user="admin";
$pass='00';
$database="love";
$connect=mysqli_connect($host,$user,$pass,$database);
if($connect==false){
    echo "database is not connect";

}



?>