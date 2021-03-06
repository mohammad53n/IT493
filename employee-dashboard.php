<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Employee Dashboard</title>

</head>

<body>
<?php
//server address, username, password, db name
$connection=mysqli_connect("main-routes-customers.cojpszz7ysj9.us-east-1.rds.amazonaws.com","admin","493Class2021!","main-routes-customers");

  if ($connection) {
    echo "Connection established";
  } else {
    echo("Connection failed. Reason: ".mysqli_connect_error());
  }
echo "<br>";

$ip_server = $_SERVER['SERVER_ADDR']; 
echo "Server IP Address is: $ip_server"; 

?>

</body>

</html>
