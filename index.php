<!-- <?php
// include_once('connection.php');
// $query="select * from bank";
// $result=mysql_query($query);
?> -->

<?php
 $server_name='localhost';
 $user_name='root';
 $password="";
 $dbname="mydb";
 
 $conn= new mysqli($server_name,$user_name,$password,$dbname); //mysqlite connection

 if(!$conn)
  {
    die("failed connection" . $conn->connect_error);
  }

  $sql = "SELECT * FROM bank "; 
$result = $conn->query($sql); 
$conn->close();

//$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>CUSTOMER DETAILS </title>
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
<body background="3.jpg">
	<div class="nav">
	<ul>
		<li><a href="index.html"><b>Home </b></a></li>
		<li><a href="transaction.html" ><b>transaction</b></a></li>
		<li><a href="index.php" ><b>Customer_Details</b></a></li>
		<li><a href="hiso.php" ><b>History</b></a></li>
	</ul>
	</div>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 <div align="center"> 
	<table align="center" border="1px" style="width:600px; line-height:40px;">
		<tr>
			<th colspan="4" ><h2>CUSTOMERS DETAILS</h2></th>
		</tr>
		<t>
			<th>ID</th>
			<th>Name</th>
			<th>Email</th>
			<th>Balance</th>
		</t>
		<?php
			while($rows=$result->fetch_assoc())
			{
		?>
				<tr>
					<td><?php echo $rows['id'];?></td>
					<td><?php echo $rows['name'];?></td>
					<td><?php echo $rows['email'];?></td>
					<td><?php echo $rows['balance'];?></td>
				</tr>
		<?php
			}
			
		?>
	</table>
</div>

</body>
</html>