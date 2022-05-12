<?php
error_reporting(0);
include_once("database.php");
$id= $_REQUEST['id'];
if(isset($_REQUEST['no'])){
  $mass=" It's  OK";
  $mass1="<font size='5px'>তবে আমি যতদিন বেছে থাকি তোমাকে এই ভালো ভালোবেসে যাবো.ভালো থেকো</font>";
  $data="no accepted sorry";
  $commect="তুমি কি কিছু বলতে চাও <br>তাহলে ক্লিক কর";
  $query="update propos set yes_or_not='$data' where id='$id'";
  $connect=$connect->query($query);
  if(empty($id)){
    $mas5="<p class='alert alert-danger'>দু:খিত আপনার তথ্য গ্রহন করা হবে না<button class='close' type='button' data-dismiss='alert'>&times</button></p>";

  }
}elseif(isset($_REQUEST['yes'])){
  $mass=" I LOVE <br> "." ......"."YOU......💍 👰";
  $mass1="<font size='5px'>আমার সকল ভালোবাসা শুধু তোমাই জুড়ে </font>";
  $data="Accepted";
  $commect="তুমি কি কিছু বলতে চাও <br>তাহলে ক্লিক কর";
 
  $query="update propos set yes_or_not='$data'  where id='$id'";
  $connect=$connect->query($query);
  if(empty($id)){
    $mas5="<p class='alert alert-danger'>দু:খিত আপনার তথ্য গ্রহন করা হবে না<button class='close' type='button' data-dismiss='alert'>&times</button></p>";

  }
  
}else{
  $mass="HEY WILL YOU BE MY LIFE PARTNER..💞 &#128149;";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>💔💔Propos💔💔</title>
    <!-- CSS only -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="responsibe.css">

<script src="https://kit.fontawesome.com/2762528b24.js" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/2762528b24.js" crossorigin="anonymous"></script>
</head>
<body>

    

   <div class="b"> 
   <div class="container">
   <div class="row">
   <div class="col-10 ">
   <?php echo $mas5?>
     <form action="<?php echo $_SERVER['PHP_SELF']?>?id=<?php echo $id ?>" method="post">
 <h1 class="text-center"><b><?php echo $mass; echo "<br> ";echo $mass1;echo "<br> "; 
?> </b></h1>
 </div>
 <div class="col-6 col-md-4">
 <button name="no" style="font-size:12px;" class="bubbly-button "> &nbsp <i style="color:yellow;font-size:15px;" class="fas fa-heart-broken"></i> No... <i style="color:yellow;font-size:15px;" class="fas fa-heart-broken"></i> &nbsp   </button>
 </div>
 <div class="col-6 col-md-4">
 <button name="yes" class="bubbly-button mr-2">OF COURSE,YES</button>
 </div>
   </div>
   </div>
   <footer>
<div class="row">
<div class="col-12 col-sm-12 col-md-8">
<a style="text-decoration: none;" href="comment.php?id=<?php echo $id?>"><h4><?php echo $commect; echo $com?></h4></a>
</div>
</div>
</footer>
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
