<?php
$mysqli = new mysqli("localhost", "root", "", "Petshop");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$q = $_REQUEST["q"];

$sql = "SELECT Description
FROM sellers WHERE Sid = ($q)";

$result = $mysqli->query($sql);
echo($result->fetch_assoc()["Description"]);
$result->close();
