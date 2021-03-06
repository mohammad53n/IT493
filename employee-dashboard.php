<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Employee Dashboard</title>

</head>

<body>
  
<?php
//server address, username, password
$connection = new mysqli("main-routes-customers.cojpszz7ysj9.us-east-1.rds.amazonaws.com","admin","493Class2021!");

  if ($connection) {
    echo "Connection to AWS DB server established";
  } else {
    echo("Connection failed. Reason: ".mysqli_connect_error());
  }
echo "<br>";

$ip_server = $_SERVER['SERVER_ADDR']; 
echo "Shahi Kulfi server IP Address is: $ip_server"; 

?>

</body>

</html>
