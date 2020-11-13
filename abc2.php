<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style >
		body {
  			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
		}
		h1{
			text-align: center;
			color: white;
			font-family: Segoe;
			font-size: 50px;
		}
		a{
			text-align: center;
			text-decoration: none;
			border: 1px solid black;
			padding: 20px;
			margin-top: 80px;
			background-color: white;
			font-size: 25px;
			position: relative;
			left: 30%;
		}
		a:hover{
			cursor: pointer;
			background-color: purple;
			color: white;
		}
	</style>
</head>
<body>
  
	<?php include 'connection.php' ?>
	
	<?php 
	$sender = $_GET["sender"];
	$receiver = $_GET["receiver"];
	$amount = $_GET["amount"];
	?>
	<h1>Congratulations!! Transfer to <?php echo $receiver ?> successful</h1>

	<a href="index.php">Home</a>
	<a href="transaction_history.php">Transaction History</a>
	<a href="lists.php">Account Holders List</a>

</body>
</html>