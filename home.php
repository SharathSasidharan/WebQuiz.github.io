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
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
		<link rel="stylesheet" href="">
	</head>
	<body>
		<div class="container">
			<br><h1 class="text-center text-primary">WEB DEVELOPMENT QUIZ</h1><br>
			<h2 class="text-center text-success"> Welcome <?php echo $_SESSION['username']  ?></h2>
			
			<div class="col-lg-8 m-auto d-block">
				<section class="card">
					<h3 class="text-center card-header">Welcome <?php echo $_SESSION['username']  ?>, You have to select only out of 4. Best of Luck 😎 </h3>
				</section><br>
				<form action="check.php" method="post">
					<!-- QUESTIONS -->
					<?php
					for($i=1 ;$i<6 ; $i++){
					$question_query= "select * from questions where qid=$i" ;
					$query = mysqli_query($con,$question_query);
					while($rows = mysqli_fetch_array($query)){
					
					//Html used here down thatswhy php used under while loop
					
					?>
					<section class="card">
						<h4 class="card-header"> <?php  echo $rows['question']    ?>   </h4>
						<!-- ***************************** ANSWERS -->
						
						<?php

						$answer_query = "select * from answers where ans_id=$i" ;
									$query = mysqli_query($con,$answer_query);

									while($rows = mysqli_fetch_array($query)){
						


									?>
						
						
										<div class="card-body">
											<input type="radio" name="quizcheck[<?php echo $rows['ans_id']; ?>]" value="<?php echo $rows['aid'] ;  ?>">
											<?php echo $rows['answer'] ;  ?>
										</div>
						
						<!-- //html used closed php -->
						<?php
}
						}

						}  //first while loop closed first php closed down
						?>

						<input type="submit" name="submit" value="submit" class="btn btn-success m-auto d-block">
					</form>

				</section> <br><br>
				<a href="logout.php" class="btn btn-primary m-auto d-block">LOG OUT</a>
            
                <div>
                	<h5 class="text-center mt-2 py-4">&copy;2021 WEBQUIZONE</h5>
                </div>
			</div>
			
		</div>
     

	</body>
</html>