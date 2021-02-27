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
    die("Connection failed. Reason: ".mysqli_connect_error());
  }

?>

</body>

</html>
