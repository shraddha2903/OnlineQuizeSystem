<!doctype html>

<?php 
	session_start();
	
$user=$_SESSION['uid'];
$s="select*from signup where userid='$user'";
$con=mysqli_connect("127.0.0.1","root","","quiz");
if($con)
{
	$rs=mysqli_query($con,$s);
	$fr=mysqli_fetch_row($rs);
	$a=$fr[0];
}

?>


<html>
<head>
<meta charset="utf-8">
<title>Final Result..</title>

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
		
		background-image:url("image/images (1).jpg");
		}
	.bg1{
	}
	
	</style>
</head>

<body class="bg">
<div class="container">

<div class="jumbotron"style="margin-top: 10px;">
<center>
<h2 class="alert-warning bg-danger">RESULT..</h2>
	<h3 class="alert-info"><?php echo $user;?></h3>

	</center>
</div>
<div class="panel">
	<div class="panel-heading bg-danger"><marquee behavior="alternate"><img src="image/images.jpg"></marquee></div>
	<div class="panel-body">







		<?php
	
	if(isset($_POST['submit']))
	{
		if(empty($_POST['quizcheck']))
		{
			?>
			<h3 class="alert-success">You have not answered of any question</h3>
			<?php
			
		}
		
		if(!empty($_POST['quizcheck']))
		{
			$count=count($_POST['quizcheck']);
			
		
		?>
		<div class="col-sm-6"><h3 class="bg-info">ATTEMPTED QUESTIONS..</h3></div>
			<div class="col-sm-6">
					
							
									
												
				<h3 class="bg-info"><i><?php echo "out of 10,you have selected '$count' question...";?></i></h3>
								
								<?php
			$result=0;
			$i=1;
			$selected=$_POST['quizcheck'];
			$q="select*from questb";
			$query=mysqli_query($con,$q);
			
			
			while($rows=mysqli_fetch_array($query))
			{
				//print_r($rows['ansopt']);
				
				//$check=$rows[2]==$selected[$i];
				
				//if($check){
					//$result++ ;
				//}
				if(empty($selected[$i]))
				{
					
					
				}
				
			else if($rows[2]==$selected[$i]){
					$result++;
				}
				
				
				$i++;
			}
			?>
		</div>
		<div class="col-sm-6"><h3 class="bg-info">YOUR SCORING....</h3></div>
		
		
		
			
		<div class="col-sm-6"><h3 class="bg-info"><?php echo "your total score is ".$result;?>...</h3></div>
			
			
			
			
	
	<?php
	/*	}
		
	}*/
		
	?>
		
		
	<?php	

/* insert into userinfo*/
		
$user=$_SESSION['uid'];

		
$s="select*from signup where userid='$user'";
$con=mysqli_connect("127.0.0.1","root","","quiz");
		
	$i="insert into userinfo(usname,totalques,correctans)values('$user','10','$result')";
		
		$con=mysqli_connect("127.0.0.1","root","","quiz");
		if($con)
		{
	$query=mysqli_query($con,$i);
			if($query){
				echo"success";
		
			}
		}
	
	/*comment */		
		}
		
	}
		
	
	?>	
			
			
	</div>
	</div>
	
	
	

	<a href="logout.php" class=" btn btn-success" style="width: 100%;">LOGOUT</a>
	</div>
	
	
	

	
	
</body>
</html>
