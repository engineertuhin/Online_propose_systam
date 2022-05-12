<?php

include_once("database.php");
 $id= $_REQUEST['id'];
 $query="delete from propos where id='$id'";
 $connec=$connect->query($query);
 if($connec==true){
     header("location:result.php?data=true");
 }




?>