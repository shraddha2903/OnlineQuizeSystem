<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Reset password</title>



<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<style>
	.bg{
		background-image: url(image/imgback.jpg);
	}
	.mr{
		margin-top: 200px;
	}
	</style>

</head>

<body class="bg">
<?php
	if(!empty($_POST['upd']))
	{
		$usd=$_POST['usid'];
		$pass=$_POST['ps'];
		$mn=$_POST['mb'];
		$u="update signup set password='$pass' where userid='$usd'and mobilenumber='$mn' ";
		$con=mysqli_connect("127.0.0.1","root","","quiz");
		if($con){
		$ms=mysqli_query($con,$u);
			
			}
		if($ms){
			echo"<script>alert('Password updated')</script>";
			}
	}
	
	?>
	<div class="container">
		<div class="col-sm-6">
			<div class="panel panel-danger mr">
				<div class="panel-heading">RESET PASSWORD....</div>
				<div class="panel-body">
					<form action="forget.php"method="post">
					<center>
						<label for="userid"><b>Userid</b></label>
						<input type="text"placeholder="Entet Registered Userid"name="usid"class=required><br><br>
						<label for="password"><b>Password</b></label>
						<input type="password"placeholder="Reset password"name="ps"required><br><br>
						<label for="number"><b>Mobile Number</b></label>
						<input type="text"placeholder="Enter Registered number"name="mb"required><br><br>
						<input type="submit"name="upd"value="reset password"class="bg-primary">
						</center>
					</form>
					
					<i class=" alert-info"><a href="login.php">Back To Login</a></i>
				</div>
			</div>
		</div>
	</div>
</body>
</html>