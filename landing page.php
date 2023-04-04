<?php 
$dbname = "tec"; // The name of the database you want to connect to
$username = "tec"; // The username for the database
$password = "123"; // The password for the database
$hostname = "localhost"; // The hostname for the database server

$conn = new mysqli($hostname, $username, $password, $dbname);
$query='select * from utilisateur';
$result = mysqli_query($conn, $query);
$data= mysqli_fetch_all($result, MYSQLI_ASSOC);
echo json_encode($data);
header("content-type: JSON");
?>