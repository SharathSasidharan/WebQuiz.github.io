<DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" href="">
</head>
<body>
	
<div class="container">
    <h1 class="text-center text-success">Welcome to The Quiz World</h1><br/>
	<div class="row">

		<div class="col-lg-6">
            <div class="card">
			<h2 class="text-center card-header ">Login Here</h2>
         <form action="validation.php" method="POST">
         	<div class="form-group">
         		<label >Username</label>
         		<input type="text" name="user" class="form-control">
         	</div>
         	<div class="form-group">
         		<label>Password</label>
         		<input type="text" name="password" class="form-control">
         	</div>



           <button type="submit" class="btn btn-primary"> Login</button>


         </form>
</div>



		</div>

		<div class="col-lg-6">
            <div class="card">
                <h2 class="text-center card-header">Sigin Here</h2>
			 <form action="registration.php" method="POST">
         	<div class="form-group">
         		<label>Username</label>
         		<input type="text" name="user" class="form-control">
         	</div>
         	<div class="form-group">
         		<label>Password</label>
         		<input type="text" name="password" class="form-control">
         	</div>



           <button type="submit" class="btn btn-primary">Sign in</button>


         </form>
         </div>
		</div>
	</div>
</div>

</body>
</html>