<?php include 'connection.php';?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>TSF Banking</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script>
		function openWin() {
  window.open("lists.php");}

  		function openWin2() {
  window.open("transaction_history.php");}
	</script>
</head>
<body>
	<h1>Basic Banking System</h1>
	<p>A TSF Web Development and Designing Task</p>

	<button type="button" onclick="openWin2()">Transaction History</button>
	<button id="list" type="button" onclick="openWin()">Account Holders</button>






	
</body>
</html>