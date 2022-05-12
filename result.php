<?php
include_once("database.php");
error_reporting(0);
$query="select * from propos";
$conne=$connect-> query($query);
if(isset($_REQUEST['data'])==true){
    $mass="<p class='alert alert-success'>Data is deleted<button class='close' type='button' data-dismiss='alert'>&times</button></p>";

}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>result</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
   <div class="row">
       <div class="col-12 col-sm-12">
           <?php echo $mass?>

       <table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th scope="col">SI No</th>
      <th scope="col">name</th>
      <th scope="col">accept or not</th>
      <th scope="col">Comment</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      <?php $col=1; while($data=$conne->fetch_assoc()){?>
    <tr>
      <th scope="row"><?php echo $col;$col++?></th>
      <td><?php echo $data['name']?></td>
      <td><?php echo $data['yes_or_not']?></td>
      <td><?php echo $data['commecnt'] ?></td>
      <td><a href="delete.php?id=<?php echo $data['id']?>" class="btn btn-danger btn-sm" >Delete</a></td>
    </tr>
      <?php }?>
    <tr>

    </div>
   </div>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>
</html>