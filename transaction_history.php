<!DOCTYPE html>
<html>
<head>
	<title>Transaction History</title>
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
            width: 600px;
            height: 100px;
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
        .middle{
        	margin-left: auto;
        	margin-right: auto;
        }
        h1{
        	text-align: center;
        	font-size: 50px;
        }
        a{
            text-decoration: none;
            text-align: center;
            border: 1px solid black;
            padding: 10px;
            background-color: white;
        }
        a:hover{
            background-color: purple;
            color: white;
            cursor: pointer;
        }
        
	</style>
	<link rel="stylesheet" type="text/css" href="navbar.css">
</head>
<body>
	 	
	<?php include'connection.php' ?>

	<h1>Transaction History</h1>
    <h2 style="text-align: center;">
    <a href="index.php">Home</a>
    <a href="lists.php">Account Holders</a>
    </h2>
	

	<table class="middle">
    <thead>
        <tr>
            <th>Sender</th>
            <th>Receiver</th>
            <th>Amount</th>
        </tr>
    </thead>
    <tbody>



		<?php $sql = "SELECT Sender, Receiver, Amount FROM transaction_history";
        $result = mysqli_query($conn, $sql);?>
    	<?php while( $row = mysqli_fetch_assoc($result)) : ?>

		<tr>
            <!--Each table column is echoed in to a td cell-->
            <td><?php echo $row['Sender']; ?></td>
            <td><?php echo $row['Receiver']; ?></td>
            <td><?php echo $row['Amount']; ?></td>
        </tr>
        <?php endwhile ?>
    </tbody>
	</table>



<script>
        function openWin() {
  window.open("lists.php");}

        function openWin2() {
  window.open("index.php");}
    </script>
</body>
</html>