<?php include 'connection.php' ?>
	
	<?php 
	$sender = $_GET["sender"];
	$receiver = $_GET["receiver"];
	$amount = $_GET["amount"];
	?>

	<?php $sql5="SELECT Name, Amount FROM banking WHERE Name='$sender'";
	$result5=mysqli_query($conn, $sql5); 
	$row=mysqli_fetch_assoc($result5) ;
	$money= $row['Amount'];

	
	
	?>



	<?php $sql3 = "SELECT Name, Sr.No.  FROM banking WHERE Name='$receiver' ";
	$result3 = mysqli_query($conn, $sql3); 
	
	if (mysqli_fetch_assoc($result3<1)){ 
	 	include 'abc1.php';
	 } 
	elseif ($money<$amount) {
	 	include 'abc3.php';
	 	
	 }

	else{
	 	$sql4 = "UPDATE banking SET Amount=Amount-$amount WHERE Name='$sender'";
		$sql2= "UPDATE banking SET Amount=Amount+$amount WHERE Name='$receiver' ";
 		$result2 = mysqli_query($conn, $sql2); 
 		$result3 = mysqli_query($conn, $sql4);
 		$sql = "INSERT INTO transaction_history VALUES ('$sender','$receiver',  $amount)";
		$result = mysqli_query($conn, $sql); 
 		include 'abc2.php';
 		

 	}



	?>
	
	

	