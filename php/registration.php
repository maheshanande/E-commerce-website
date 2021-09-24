<?php
session_start();


header('localtion:register1.php');

$con = mysqli_connect('localhost','Mahesh','2002');

mysqli_select_db($con,'registration');

$name = $_POST['user'];
if($name==''){
    echo"<script>alert( 'username not set')</script>";
}
$pass = $_POST['password'];
$mail = $_POST['Email'];
$mobileno = $_POST['mobile_no'];  
$add = $_POST['address'];

$s = "select * from usertable where name = '$name'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num == 1){
    echo"<script>alert( 'username already taken ')</script>";
    /*header('location:HOME1.php');*/

}
if($num == 2){
    echo"<script>alert( 'username already taken ')</script>";
}   
else{
    $reg = "insert into usertable(name , password , Email , mobile_no , address) values ('$name' , '$pass' , '$mail' , '$mobileno' , '$add')";
    mysqli_query($con , $reg);
    echo"<script>alert('successfully registered')</script>";

   /* header('location:login.php');*/
   
}

?>