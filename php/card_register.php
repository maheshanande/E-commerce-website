<?php
session_start();


header('localtion:add card.html');

$con = mysqli_connect('localhost','Mahesh','2002');

mysqli_select_db($con,'details');

$name = $_POST['user'];
$dat = $_POST['date'];
$exp = $_POST['exp_date'];
$card = $_POST['card_number'];  


$s = "select * from card where name = '$name'";

$results = mysqli_query($con , $s);

$num1 = mysqli_num_rows($results);

if($num1 == 1){
    echo"<script>alert( 'username already taken ')</script>";
}   
else{
    $reg = "insert into card(name , date , exp_date , card_number) values ('$name' , '$dat' , '$exp' , '$card')";
    mysqli_query($con , $reg);
    echo"<script>alert( 'successfully registered ')</script>";

   
}

?>