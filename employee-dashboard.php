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


//sample input html code
<h3>View Route Info</h3>
<form method="post"><select id="route" name="route">
<option value="MD1">Maryland 1</option>
<option value="MD2">Maryland 2</option>
<option value="MD3">Maryland 3</option>
<option value="MD4">Maryland 4</option>
<option value="MD5">Maryland 5</option>
<option value="PA1">Pennsylvania 1</option>
<option value="PA1">Pennsylvania 2</option>
<option value="RICHMOND">Richmond</option>
<option value="VA1">Virginia 1</option>
<option value="VA2">Virginia 2</option>
<option value="VA3">Virginia 3</option>
<option value="VA4">Virginia 4</option>
<option value="VA5">Virginia 5</option>
<option value="VA6">Virginia 6</option>
<option value="VA7">Virginia 7</option>
<option value="VA8">Virginia 8</option>
</select><input name="Value 1" type="text" placeholder="Enter Value 1" /> <input name="Value 2" type="text" placeholder="Enter Value 2" /> <input name="submit-btn" type="submit" value="Submit" /></form>
