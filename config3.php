<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Petshop";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection Failed: " . $conn->connect_error);
}

$sql = "CREATE TABLE Buyers (
Bid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
BName VARCHAR(30) NOT NULL,
Busername VARCHAR(30) NOT NULL,
Bpassword VARCHAR(10) NOT NULL,
Petcategory VARCHAR(10) NOT NULL,
Address VARCHAR(50) NOT NULL
);";

if ($conn->query($sql) === TRUE) {
    echo "Table Buyers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE Sellers (
Sid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
SName VARCHAR(30) NOT NULL,
Susername VARCHAR(30) NOT NULL,
Spassword VARCHAR(10) NOT NULL,
Petcategory VARCHAR(10) NOT NULL,
Breed VARCHAR(30) NOT NULL,
Petname VARCHAR(20) NOT NULL,
Petage INT(5) NOT NULL,
Description VARCHAR(200) NOT NULL,
Address VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Sellers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$sql = "CREATE TABLE Petcare (
PCid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(30) NOT NULL,
Dropdate DATE NOT NULL,
Pickupdate DATE NOT NULL,
Petcategory VARCHAR(10) NOT NULL,
Breed VARCHAR(30) NOT NULL,
Petname VARCHAR(20) NOT NULL,
Petage INT(5) NOT NULL,
Description VARCHAR(200) NOT NULL,
Contactno VARCHAR(12) NOT NULL,
Address VARCHAR(50) NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Petcare created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>