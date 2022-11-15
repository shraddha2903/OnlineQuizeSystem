<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Admin...</title>

	<script>
	function sh(){
		document.getElementById("qz").style.display="block";
		
	}
	
	</script>

<meta name="viewport" content="width=device-width, initial-scale=1">
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
	if(!empty($_POST['aset'])){
		$aaid=$_POST['ans'];
		$answer=$_POST['anse'];
		$opt=$_POST['optid'];
		$i="insert into anstb(a_id,answer,ansopt)values('$aaid','$answer','$opt')";
		$con=mysqli_connect("127.0.0.1","root","","quiz");
		if($con){
			mysqli_query($con,$i);
		}
	}
	?>
	<?php
	if(!empty($_POST['qset'])){
		$qqid=$_POST['ques1'];
		$quest=$_POST['ques2'];
		$corr=$_POST['ques3'];
		$i="insert into questb(quesid,question,ansopt)values('$qqid','$quest','$corr')";
		$con=mysqli_connect("127.0.0.1","root","","quiz");
		if($con){
			mysqli_query($con,$i);
		}
	}
	
	?>
   <div class="container bg-danger"><br><br>
    <center>
    <div class="col-sm-12 thumbnail"style="background-color: aqua">
    <a href="homepage.php" class="bg-primary">Home</a>
		<h2><i class=" bg-primary">ADMIN PANEL...</i></h2> 
		
     </div>
     
	  	
	<div class="col-sm-6">
		<div class="jumbotron">
		<h3>Set Questions & correct Option..</h3><hr>
			<form action="setadmin.php"method="post">
			<label for="qid">Question number:</label>
				<input type="number"placeholder="enter question number(id)"name="ques1" required><br><br>
				<label for="question">Question:</label>
				<input type="text"placeholder="enter question(text)"name="ques2"required><br><br>
				<label for="correct">Correct Id:</label>
			<input type="number"placeholder="enter correct option(ans id)"name="ques3"required><br><br>
			<input type="submit"name="qset" value="Set Question"><br>
			
			</form>
		</div>
	</div>

	  
	 
	     <div class="col-sm-6">
	<div class=" row jumbotron">
	<h3> Set Answer and Options..</h3><hr>
		<form action="setadmin.php"method="post">
			<label for="a_id">Answer Number:</label>
			<input type="number"placeholder="enter option number(id)"name="ans"required><br><br>
			<label for="answer">Answer Option:</label>
			<input type="text"placeholder="enter answers(text)"name="anse"required><br><br>
			<label for="options">Question Number:</label>
			<input type="number"placeholder="question number"name="optid"required><br><br>
			<input type="submit"name="aset"value="Set Answer"><br>
		</form>
	</div>
		  </div>
	   
	
	

	<?php 
	if(!empty($_POST['updateQ']))
	{
		$quesn=$_POST['qn'];
		$opt=$_POST['optn'];
		$ques=$_POST['qs'];
		$up="update questb set question='$ques and ansopt='opt' where quesid='$quesn'";
		$con=mysqli_connect("127.0.0.1","root","","quiz");
		if($con){
			mysqli_query($con,$up);
		}
	}
	?>
	<div class="col-sm-6">
	<div class="jumbotron">
	<h3>Update Question</h3><hr>
	<form action ="setadmin.php"method="post">
	           <label for="question no.">Question Number:</label>
		<input type="text"name="qn"placeholder="enter question num (quesid)"required><br><br>
		       <label for="question"> Type Question:</label>
		   <input type="text"name="qs"placeholder="Type question"required><br><br>
		       <label for="copt">Correct Option:</label>
		<input type="number" name="optn" placeholder="enter correct option no.(ansopt)"required><br><br>
		
		<input type="submit"value="Update Question"name="updateQ"class="bg-success">
	</form>
		</div>
	</div>
	
	<?php 
		if(!empty($_POST['Aupdate']))
		{
		$aid=$_POST['id'];
			$ans=$_POST['answ'];
			$upd="update asntd set answer='$ans' where a_id='$aid'";
			$con=mysqli_connect("127.0.0.1","root","","quiz");
			if($con){
				mysqli_query($con,$upd);
			}
		}
		
		?>
	<div class="col-sm-6">
		
		<div class="jumbotron">
			
			<h3>Update Answers</h3><hr>
			<form>
				<label for="ansn">Answer Id:</label>
				<input type="number" name="id"placeholder="enter Answer Id(a_id)"required><br><br><br>
				
				<label for="ansn"> Type Options:</label>
				<input type="text" name="answ"placeholder="enter Options (text)"required><br><br><br>
				
				<input type="submit"value="Update Answer"name="Aupdate"class="bg-success">
			</form>
		</div>
		<br><br>
	</div>
	<br><br><br>
	<hr>
	
	
	<button type="button"onclick="sh();">
		<h3>View Participated User's Result</h3></button>
	</center>
	<div id="qz"style="display:none">
	<div class="col-sm-3"><h4>User Id:</h4></div>
		<div class="col-sm-3"><h4>User Name:</h4></div>
			<div class="col-sm-3"><h4>Total Question</h4></div>
				<div class="col-sm-3"><h4>Correct Answer</h4></div>
	<?php 
	   
	$q="select * from userinfo ";
	   $con=mysqli_connect("127.0.0.1","root","","quiz");
	
	   if($con)
	   {
		   $q=mysqli_query($con,$q);
	while($fr=mysqli_fetch_array($q))
	{
		$b=$fr['userid'];
		$c=$fr['usname'];
		$d=$fr['totalques'];
		$e=$fr['correctans'];
	
	  // echo "$b"."$c"."$d"."$e";
		?>
		<div class="col-sm-3 thumbnail">
		<i><?php echo $b;?></i>
		</div>
		<div class="col-sm-3 thumbnail"><i><?php echo $c; ?></i></div>
		<div class="col-sm-3 thumbnail"><i><?php echo $d;?></i></div>
		<div class="col-sm-3 thumbnail"><i><?php echo $e;?></i></div>
		
		
		<?php   
	}

	   }
	
	   ?>
	
	
	   </div>
	
	</div>
	<br><br><br>
</body>
</html>