<!doctype html>
<html>
<head>
<meta charset="utf-8"content="width=device-width,initial-scale=1"name="viewport">
<title>Signup</title>

<link type="text/css"rel="stylesheet"href="css/bootstrap.min.css">
<link type="text/css"rel="stylesheet"href="css/bootstrap.css">
<link type="text/css"rel="stylesheet"href="css/font-awesome.css">

<link type="text/css" rel="stylesheet" href="css/responsive/responsive.css"/>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<style>
	.bg{
		
		background-image: url(image/imgback.jpg);
	
	}
	
	.frm{
		font-size: 20px;
	}
	</style>
</head>

<body class="bg" >

<?php
	
	if(!empty($_POST['sub2']))
	{
		$user=$_POST['usid'];
		$br=$_POST['brny'];
		$pass=$_POST['pas'];
		$num=$_POST['nm'];
		
		$i="insert into signup(userid,branch_yr,password,mobilenumber)values('$user','$br','$pass','$num')";
		$con=mysqli_connect("127.0.0.1","root","","quiz");
		if($con)
		{
			mysqli_query($con,$i);
			header("location:login.php");
		}
	}
	?>
	
	
	<div class="container"><br>
		<i><p style="text-align: center;background-color:yellow;"><marquee>Welcome in online quiz...</marquee></p></i>
		
		<a href="homepage.php">
		<b class="fa fa-arrow-left" style="background-color: cadetblue;font-size: 20px;">Back to Home</b>
		</a>
		<br><br>
		<div class="col-sm-7">
		<div class="panel panel-info">
			<div class="panel-heading"><h3>Signup...</h3></div>
			<div class="panel-body">
	<form action="qsignup.php"method="post"class="frm">
	
	<center>
	<label for="usid"><b>STUDENT NAME</b></label>
		<input type="text"placeholder="please enter name"name="usid" class="alert-primary"required><br><br>
		
		
	<label for="bryr"><b>BRANCH & YEAR</b></label>
		<input type="text"placeholder="please enter branch & year"name="brny" class="alert-primary"required><br><br>
		
		<label for="pas"><b>PASSWORD</b></label>
		<input type="password"placeholder="enter password(10digit or char)"name="pas" requird><br><br>
		<label for="num"><b>MOBILE NUMBER</b></label>
		<input type="text"placeholder="enter valid mobile number"name="nm" required><br><br>
		<input type="submit"name="sub2"value="Submit"class="btn-info">
		</center>
		
	</form>
	<p><a href="login.php"><i class="btn-link btn-danger"style="font-size: 15px;">Already Registered....Login</i></a></p>
		</div>
		</div>
		</div>
	</div>
</body>
</html>