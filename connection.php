<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb";

$conn= mysqli_connect($servername,$username,$password,$dbname);

if ($conn)
{
	//echo "connection OK";
}
else
{
	echo "connection failed".mysqli_connect_error();
}

?>