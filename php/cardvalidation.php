<?php
session_start();


$con = mysqli_connect('localhost','Mahesh','2002');

mysqli_select_db($con,'details');

$name = $_POST['user'];
$card = $_POST['card_number'];


$s = "select * from card where name = '$name' ";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num == 1){
   $_SESSION['username'] = $name;
   $_SESSION['card_number'] = $card;
   header('location:payment.php');
}

else{
   header('location:payment.php');
      
}
   


?>