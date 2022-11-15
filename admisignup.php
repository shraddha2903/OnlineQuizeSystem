<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>admin signup</title>


<link type="text/css"rel="stylesheet"href="css/bootstrap.min.css">
<link type="text/css"rel="stylesheet"href="css/bootstrap.css">
<link type="text/css"rel="stylesheet"href="css/font-awesome.css">

<link type="text/css" rel="stylesheet" href="css/responsive/responsive.css"/>
<script src="js/bootstrap.min.js"></script>
<link rel="stylesheet" href="style.css">
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
</head>

<body>


<?php
	if(!empty($_POST['sign']))
	{
		$adnm=$_POST['adid'];
		$adpass=$_POST['adpas'];
		
		
		$i="insert into adminsignup(adminid,adminpassword)values('$adnm','$adpass')";
		$con=mysqli_connect("127.0.0.1","root","","quiz");
		if($con)
		{
			mysqli_query($con,$i);
			
		}
	}
	?>
	
	
	
	
	<div class="container"><br>
		
		<div class="col-sm-7">
		<div class="panel panel-info">
			<div class="panel-heading"><h3> Admin Signup...</h3></div>
			<div class="panel-body">
	<form action="admisignup.php"method="post"class="frm">
	
	<center>
	<label for="adid"><b>ADMIN ID<b></label>
		<input type="text"placeholder="enter name"name="adid" class="alert-primary"required><br><br>
		<label for="adpas"><b>PASSWORD</b></label>
		<input type="password"placeholder="enter password(10digit)"name="adpas" requird><br><br>
		
		<input type="submit"name="sign"value="SIGNUP"class="btn-success">
		</center>
		
	</form>
	<p><a href="adminlogin.php"><i class="btn-link btn-danger"style="font-size: 15px;">Already Registered....Login</i></a></p>
		</div>
		</div>
		</div>
	</div>
</body>
</html>