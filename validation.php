<?php

session_start();


$con = mysqli_connect('localhost','root');


if($con){
	echo"connection successfull";

}else{
	echo"connection not success";
}

mysqli_select_db($con,'sessionprac');

$name = $_POST['user'];
$pass = $_POST['password'];


$matching_credential = "select * from signin where name = '$name' && password = '$pass' ";

$result = mysqli_query($con,$matching_credential);

$num = mysqli_num_rows($result);

if($num==1) {
	
  $_SESSION['username']= $name;
  header('location:home.php');


}else{
      header('location:login.php');

}







?>