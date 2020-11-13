<?php include 'connection.php';?>

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>TSF Banking</title>
	<style type="text/css">
		body {
  			background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
		}
		h1{
			text-align: center;
			color: white;
			font-family: Segoe;
			font-size: 100px;
		}
		p{
			text-align: center;
			color: yellow;
			font-family: segoe-script;
			font-size: 35px;
			position: relative;
			top: -45px;
		}
		table, th,tr,td{
            border: 1px solid black;
        }
        .center{
            margin-left: auto;
            margin-right: auto;
        }
        table{
            width: 900px;
            height: 500px;
            color: black;
            font-size: 30px;
            border-color: white;
        }
        th, td{
            text-align: center;
            border: 3px solid #071a3d ;
            color: yellow;
        }
        th{
            background-color: #071a3d ;
            color: white;

        }
        form{
			font-size: 25px;
			text-align: center;
			margin: auto;
			padding-top: 0px;
		}
		label{
			padding: 20px;
			justify-content: left;
			font-weight: 100px;
			color: yellow;
		}
		a{
			text-align: center;
			text-decoration: none;
			border: 1px solid black;
			padding: 20px;
			background-color: white;
			font-size: 25px;
			position: relative;
			top: 40px;
			
		}
		a:hover{
			cursor: pointer;
			background-color: purple;
			color: white;
		}
	</style>
</head>
<body>
	<h1>Basic Banking System</h1>
	<p>Account Holder List<br>
	<a href="index.php">Home</a>
	<a href="transaction_history.php">Transaction History</a></p>
	

	<table class="center">
    	<thead>
        	<tr>
            	<th>Sr.No.</th>
            	<th>Name</th>
            	<th>Account No.</th>
            	<th>Amount</th>
        	</tr>
    	</thead>
    
    	<tbody>
        	
        	<?php $sql = "SELECT * from banking";
        	$result = mysqli_query($conn, $sql);?>
        	<?php while( $row = mysqli_fetch_assoc($result)) : ?>
        
        	<tr>
            	
            	<td><?php echo $row['Sr.No.']; ?></td>
            	<td><?php echo $row['Name']; ?></td>
            	<td><?php echo $row['Account No.']; ?></td>
            	<td><?php echo $row['Amount']; ?></td>
        	</tr>
        <?php endwhile ?>
    	</tbody>
	</table>


	<div class="container">
		<form action="transaction.php" method="get">
			<br><br><label>From: &nbsp;</label>
			<input list="names" type="text" name="sender", required>
			<datalist id="names">
				<option value="Abhiraj"></option>
				<option value="Hrishi"></option>
				<option value="Hrishika"></option>
				<option value="Ricky"></option>
				<option value="Aryan"></option>				
			</datalist>
			<label>Transfer to: &nbsp;</label>
			<input list="namess" type="" name="receiver" required>
			<datalist id="namess">
				<option value="Abhiraj"></option>
				<option value="Hrishi"></option>
				<option value="Hrishika"></option>
				<option value="Ricky"></option>
				<option value="Aryan"></option>				
			</datalist>
			<label>Amount: &nbsp;</label>
			<input name="amount" required>
			<input class="click" type="submit" value="Transfer">
		</form>

		
	</div>








	
</body>
</html>