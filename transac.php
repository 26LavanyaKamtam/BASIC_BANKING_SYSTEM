<?php
include("connection.php");
error_reporting(0);
?>

<!DOCTYPE html>
<html>
<head>
	<title>TRANSACTION</title>
	<link rel="stylesheet" href="transaction.css" type="text/css">
</head>
<body background="1.jpg">
<div class="menu-bar">
	<ul>
		<li><a href="index.html"><b>Home </b></a></li>
		<li><a href="transac.php"><b>transaction </b></a></li>
		<li><a href="index.php" ><b>Customer_Details</b></a></li>
		<li><a href="hiso.php" ><b>History</b></a></li>
	</ul>
</div>
	<div class ="main">
		<div class="register">
			<h2>TRANSACTION</h2>
			<form  action=" history1.php" id="register" method="post" >
				<label> SENDER &nbsp;&nbsp;&nbsp;&nbsp;:     &nbsp;&nbsp;</label> 
				<input type="text" name="fname" id="name" placeholder="SENDER" list="sender" name="SENDER" >
				<datalist id=sender>
				<option value="Lavanya Kamtam">Lavanya Kamtam</option>
				<option value="Gayatri Mugli">Gayatri Mugli</option>
				<option value="Shravanti Kamtam">Shravanti Kamtam</option>
				<option value="Amruta Yemul">Amruta Yemul</option>
				<option value="Bhargavi Sherla">Bhargavi Sherla</option>
				<option value="Shrutika Yerpul">Shrutika Yerpul</option>
				</datalist>
				<br><br>
				<label> RECEIVER :  &nbsp;&nbsp;</label>
				<input type="text" name="fname" id="name" placeholder="RECEIVER" list="receiver" name="RECEIVER" >
				<datalist id ="receiver">
				<option value="Lavanya Kamtam">Lavanya Kamtam</option>
				<option value="Gayatri Mugli">Gayatri Mugli</option>
				<option value="Shravanti Kamtam">Shravanti Kamtam</option>
				<option value="Amruta Yemul">Amruta Yemul</option>
				<option value="Bhargavi Sherla">Bhargavi Sherla</option>
				<option value="Shrutika Yerpul">Shrutika Yerpul</option>
			</datalist>
				<br><br>
				<label> AMOUNT &nbsp;&nbsp;:  &nbsp;&nbsp;</label>
				<input type="number" name="amount" id="amount" placeholder="AMOUNT" name="amount">
				<br><br>
				<input type="submit"  value="submit"  name="submit" id="submit" class="btn btn-primary" action="history1.php" ><!-- <a href="#"> submit</a></button> -->
			</form>
		</div>
	</div>
</body>
</html>

<?php
$sn=$_GET['sender'];
$rn=$_GET['receiver'];
$an=$_GET['amount'];

//echo "$sn";
//echo "$rn";
//echo "$an";

$query="INSERT INTO HISTORY VALUES('$sn','$rn','$an')";
$data = mysqli_query($conn,$query);

if($data)
{
	echo "data_inserted in table";
}
else
{
	echo "failed";
}
?>


