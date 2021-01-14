<?php
session_start();
if(!isset($_SESSION['username'])){
	header('location:login.php');
}
$con=mysqli_connect('localhost','root');
// if($con){
		// 	echo"success";
// }
mysqli_select_db($con,'quizdtabase');
?>






<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="">
</head>
<body>
	<div class="container text-center">
		<br><br>
	<table class="table table-bordered table-hover">

		<tr>
			<th colspan="2" class="bg-dark"> <h1 class="text-white">Results</h1></th>
		</tr>

		<tr>
			<td>
				Question Attempted
			</td>


<?php
$result=0;
if(isset($_POST['submit'])){
if(!empty($_POST['quizcheck'])){

//count function used
 $count = count($_POST['quizcheck']);

	?>

<td>
<?php
echo "Out of 5 you have selected ".$count." options"; ?>
</td>


<?php
$selected = $_POST['quizcheck'];
// print_r($selected);

$q = "select * from questions " ; 
$query = mysqli_query($con,$q);
$i=1;
while($rows = mysqli_fetch_array($query) ){

 $flag= $rows['ans_id']== $selected[$i];


   // $checked = $rows['ans_id'] == $selected[$i];

  if($flag){

  	$result++;
  }
    
    $i++;
 
}
?>

<tr>


	<td>
		Your Total Score
	</td>

	<td colspan="2">
		<?php
		echo " Your total score is " .$result;
	}
	else{
		echo" <b>please select atleast one option</b>";
	}
}
?>
	</td>

</tr>



<?php


    

   $name = $_SESSION['username'];
   $finalresult = "insert into user(username,totalques,answercorrect) values('$name','5','$result')";
   $queryresult = mysqli_query($con,  $finalresult);




?>

</table>
</div>

<div class="row">
	
<a href="logout.php" class="btn btn-success m-auto d-block  ">LOG OUT</a>

</div>
	

</body>
</html>