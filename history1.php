<?php
	if(isset($_post['name'])){
		$sender = $_POST['sender'];
	$receiver = $_POST['receiver'];
	$amount = $_POST['amount'];
}

	$conn=new mysqli('localhost','root','','mydb');
	if($conn->connect_error){
		die('Connection Failed : '.$conn->connect_error);
	}else{
		$stmt = $conn->prepare("insert into history(sender,receiver,amount)
			values(?,?,?)");
		$stmt->bind_param("ssi",$sender,$receiver,$amount);
		$stmt->execute();
		echo "transaction successful.....";
		 //$stmt->close();
		// $conn->close();
	}
	 $sql = "SELECT * FROM history "; 
	 $result = $conn->query($sql); 
	 $conn->close();
	?>

<!DOCTYPE html>
<html>
<head>
	<title>TRANSACTION HISTORY </title>
	<link rel="stylesheet" href="customer.css" type="text/css">
	<style>
		body{
			margin: 0;
			padding: 0;
			background: #ccc;
		}
		.nav ul{
			list-style: none;
			background: rgb(0,100,0);
			text-align:right;
			padding: 0;
			margin: 0;
		}
		.nav li{
			display:inline-block;

		}
		.nav a{
			text-decoration: none;
			color: #fff;
			width: 100px;
			display: block;
			padding: 15px;
			font-size: 17px;
			font-family: Helvetica;
			transition: 0.4s;
		}
	</style>
</head>
<body background="2.jpg">
	<div class="nav">
	<ul>
		<li><a href="index.html"><b>Home </b></a></li>
		<li><a href="transaction.html" ><b>transaction</b></a></li>
		<li><a href="index.php" ><b>Customer_Details</b></a></li>
		<li><a href="history1.php" ><b>History</b></a></li>
	</ul>
	</div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <div align="center"> 
	<table align="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="5" ><h2>TRANSACTION HISTORY</h2></th>
		</tr>
		<t>
			<th>ID</th>
			<th>Sender</th>
			<th>Receiver</th>
			<th>Amount</th>
		</t>
		<?php
			while($rows=$result->fetch_assoc())
			{
		?>
				<tr>
					<td><?php echo $rows['id'];?></td>
					<td><?php echo $rows['sender'];?></td>
					<td><?php echo $rows['receiver'];?></td>
					<td><?php echo $rows['amount'];?></td>
				</tr>
		<?php
			}
			
		?>
	</table>
</div>

</body>
</html>
