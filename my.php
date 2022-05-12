<?php
error_reporting(0);
include_once("database.php");
 $name=$_REQUEST['name'];
 $query="Select * from propos where name='$name'";
 $connec=$connect-> query($query);
 $data=$connec-> fetch_assoc();
$id=$data['id'];
if($connec==true){

header("location:index.php?id=$id");

}




?>