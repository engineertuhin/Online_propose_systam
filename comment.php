<?php
error_reporting(0);
include("database.php");
    $id =$_REQUEST['id'];
  $name=$_REQUEST['name'];

  if(isset($_REQUEST['yes'])){

 if(empty($name)){

$mass="<p class='alert alert-danger'>তোমার মতামত দিতে হবে<button class='close' type='button' data-dismiss='alert'>&times</button></p>";

 }elseif(empty($id)){

    $mass="<p class='alert alert-danger'>দু:খিত আপনার তথ্য গ্রহন করা হবে না<button class='close' type='button' data-dismiss='alert'>&times</button></p>";


}
 else{

$query="update propos set commecnt='$name' where id ='$id'";
$con=$connect->query($query);
if($con==true){
    $mass="<p class='alert alert-success'>তোমার মতামত এর জন্য ধন্যবাদ<button class='close' type='button' data-dismiss='alert'>&times</button></p>";



}

 }


  }




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💞💞তোমার মতামত💞💞</title>
  <link rel="stylesheet" href="nameset.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
<div class="a">
 <form action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $id ?>" method="POST">
<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-8">
            <?php  echo $mass?>
<div class="form-group b">
    <label class="c" for="exampleInputPassword1" style="color:#D8BFD8;font-width:bold; ">কি বলতে চাও তুমি ?</label>
    <textarea class="form-control" name="name" id="exampleFormControlTextarea1" placeholder="তোমার মতামত লিখো " rows="3"></textarea>
  </div>
  <div col="text-center col-12">
  <button type="submit" name="yes" class="bubbly-button ">.....ok....</button>
</div>
  </div>

</div>
</div>
</div>
</form>
<script>
var animateButton = function(e) {

e.preventDefault;
//reset animation
e.target.classList.remove('animate');

e.target.classList.add('animate');
setTimeout(function(){
  e.target.classList.remove('animate');
},700);
};

var bubblyButtons = document.getElementsByClassName("bubbly-button");

for (var i = 0; i < bubblyButtons.length; i++) {
bubblyButtons[i].addEventListener('click', animateButton, false);
}

   </script>
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>