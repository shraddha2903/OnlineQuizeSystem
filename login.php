<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Login</title>


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
		font-size: 27px;
	}
	.bg1{
		
		
		font-size: 22px;
	}
	</style>
</head>

<body style="background-image: url(image/imgback.jpg);">
<?php
	session_start();
	if(!empty($_POST['sub']))
	{
	$usd=$_POST['usid'];
		$pas=$_POST['password'];
		$s="select * from signup where userid='$usd' and password='$pas'";
		$con=mysqli_connect("127.0.0.1","root","","quiz");
		if($con){
		$cr=mysqli_query($con,$s);
			$fr=mysqli_fetch_row($cr);
			$us=$fr[0];
			$ps=$fr[2];
			if($us==$usd&&$ps==$pas)
			{
				$_SESSION['uid']=$us;
				header("location:user.php");
			}
			else{
				echo"<script>alert('invalid id')</script>";
			}
		}
	}
	?>
	<div class="container">
	<br><br>
	<a href="homepage.php">
		<b class="fa fa-arrow-left" style="background-color: cadetblue;font-size: 20px;">Back to Home</b>
		</a>	
		<center><p style="background-color: aqua;"><b>LOGIN..</b></p></center><br>
<div class="col-sm-6">
<div class="panel panel-primary">
	<div class="panel-heading"><marquee>LOGIN</marquee></div>
<div class="panel-body">
<form action="login.php"method="post"class="bg1";>
	<center>
		      <label for="userid"><b>userid</b></label>
	<input type="text"placeholder="enter userid"name="usid"required><br><br>
	<label for="password"><b>password</b></label>
	<input type="password"placeholder="enter password"name="password"required><br><br>
	<input type="submit"name="sub"value="LOGIN"class="btn-success">
	</center>
	<p><a href="forget.php"><b class="btn-link">Forget Password</b></a></p>
	
	<p><a href="qsignup.php"><i class="btn-link btn-success">Not registered.......Signup</i></a></p>
	</div>
	</div>
	</div>
	</div>
</form>

</body>
</html>
