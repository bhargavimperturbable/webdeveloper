<?php

$con = mysqli_connect('localhost','root','','youtubedata');

if(isset($_POST['submit']));
{
 $user = $_POST['user'];
 $email = $_POST['email'];
 $message = $_POST['message'];

 $query = "INSERT INTO userinfodata(user,	email,message) VALUE('$user','$email','$message')";
 if($query){
  echo "<script> alert (data inserted Successfully)</script>";
 }else{
  echo "<script> alert (There is an Error)</script>";
 }

 $run = mysqli_query($con,$query);
}
?>