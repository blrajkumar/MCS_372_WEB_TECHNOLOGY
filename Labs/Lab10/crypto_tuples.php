<!DOCTYPE html>
<html>
<head>
  <title>Display all records from Currencies Database</title>
</head>
<body>

<h2>Crypto Details</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Name</td>
    <td>Price</td>
  </tr>

<?php

$host = "localhost";
$user = "kumarraj";
$passwd = "Bagya469";
$db = "crypto";

$con = new mysqli($host, $user, $passwd, $db);

if ($con->connect_errno) {

    printf("connection failed: %s\n", $con->connect_error());
    exit();
}

$query = "SELECT * FROM currencies";
$records = $con->query($query); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['price']; ?></td>    
  </tr>	
<?php
}
$con->close();
?>
</table>

</body>
</html>
