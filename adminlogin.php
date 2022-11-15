<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>adminlogin..</title>
<meta name="viewport"content="width=device-width"initial-scale="1">

<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>



<?php
	
	if(!empty($_POST['log']))
	{
	$admin=$_POST['adid'];
		$apas=$_POST['adpass'];
		$s="select * from adminsignup where adminid='$admin' and adminpassword='$apas'";
		$con=mysqli_connect("127.0.0.1","root","","quiz");
		if($con){
		$cr=mysqli_query($con,$s);
			$fr=mysqli_fetch_row($cr);
			$us=$fr[0];
			$ps=$fr[1];
			if($us==$admin&&$ps==$apas)
			{
				
				header("location:setadmin.php");
			}
			else{
				echo"<script>alert('invalid id')</script>";
			}
		}
	}
	?>
	
	
	
	
	
	<div class="container">
	<br><br>	<center><p style="background-color: aqua"><b>LOGIN..</b></p></center><br>
<div class="col-sm-6">
<div class="panel panel-danger">
	<div class="panel-heading">ONLY FOR ADMIN LOGIN</div>
<div class="panel-body">
<form action="adminlogin.php"method="post"class="bg1";>
	<center>
		      <label for="userid"><b>adminid</b></label>
	<input type="text"placeholder="admin name..."name="adid"required><br><br>
	<label for="password"><b>password</b></label>
	<input type="password"placeholder="enter password"name="adpass"required><br><br>
	<input type="submit"name="log"value="LOGIN"class="btn-success">
	</center>
	
	
	</div>
	</div>
	</div>
	</div>
</form>
</body>
</html>