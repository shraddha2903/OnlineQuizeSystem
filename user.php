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
<title>Quiz World..</title>

<meta name="viewport" content="width=device-width, initial-scale=1">
<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>
<script src="js/bootstrap.min.js"></script>
<link type="text/css" rel="stylesheet" href="css/bootstrap.css"/>
<link type="text/css" rel="stylesheet" href="css/style.css"/>
<link type="text/css" rel="stylesheet" href="css/font-awesome.css"/>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>


<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
<style>
	.bt{
		padding: inherit;
		width: 100%;
		font-size: 20px;
	}
	.tx{
		position:fixed;
		
		
	}
	</style>
</head>

<body>
<div class="container"><div class="col-sm-12 tx">
	<br><h1 class="text-primary "><center>Technical Quiz..</center></h1><br></div>
	<h4 class="text-center text-success">Welcome <?php echo $a ;?></h4>
	
	<div class="jumbotron"style="margin: inherit">
	
		<h5 class="text-center text-success">Welcome <?php echo $a ;?> Best Of Luck(:</h5>
		
		
	</div><br>
	                  <form action="check.php"method="post">
	
	<?php
		for($i=1;$i<=50;$i++)
		{
	$q="select*from questb where quesid=$i";
	$query=mysqli_query($con,$q);
	while($rows=mysqli_fetch_array($query)){
		$b=$rows[0];
		$c=$rows[1];
		$d=$rows[2];
		?>
		<div class="jumbtron">
			<div class="alert-danger"><h4><?php echo $b ?>..<?php echo $c?></h4></div>
			<?php
			$q="select*from anstb where ansopt=$i";
		$query=mysqli_query($con,$q);
		while($rows=mysqli_fetch_array($query))
		{
			?>
			<div>
				<input type="radio"name="quizcheck[<?php echo $rows['ansopt'];?>]"value="<?php echo $rows[0];?>">
				<?php echo $rows[1]; ?>
			</div><br>
			
		
		
		
		
		
		
	<?php	
	}
	}
		}
	?>
	     <br><br>
	                             <input type="submit"name="submit"value="submit"class="btn btn-success bt"><br><br>
		                 </form>
		                 
						  </div>
						  
	
</div>	
</body>
</html>