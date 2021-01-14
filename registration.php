<?php

session_start();
header('location:login.php');

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
	echo "username already exits";
}else{
	$insert_query = "insert into signin (name,password) values('$name','$pass') ";
       mysqli_query($con,$insert_query);


}







?>