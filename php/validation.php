<?php
session_start();


$con = mysqli_connect('localhost','Mahesh','2002');

mysqli_select_db($con,'registration');

$name = $_POST['user'];

$pass = $_POST['password'];


$s = "select * from usertable where name = '$name' && password = '$pass'";

$result = mysqli_query($con , $s);

$num = mysqli_num_rows($result);

if($num == 1){
   $_SESSION['username'] = $name;
   header('location:HOME1.php');
}

else{
   header('location:login.php');
   echo"<script>alert('Please enter valid username/password')</script>";
   /**/
      
}
   


?>