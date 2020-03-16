<?php
$servername = "localhost";
$username = "nikhi";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

// Create database
$sql = "CREATE DATABASE Petshop";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

$dbname = "Petshop";

$sql = "CREATE TABLE Buyers (
Bid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
BName VARCHAR(30) NOT NULL,
Busername VARCHAR(30) NOT NULL,
Bpassword VARCHAR(10) NOT NULL,
Petcategory VARCHAR(10) NOT NULL,
Address VARCHAR(50) NOT NULL,
)";

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
Address VARCHAR(50) NOT NULL,
)";


$sql = "CREATE TABLE Petcare (
PCid INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
Name VARCHAR(30) NOT NULL,
Petcategory VARCHAR(10) NOT NULL,
Breed VARCHAR(30) NOT NULL,
Petname VARCHAR(20) NOT NULL,
Petage INT(5) NOT NULL,
Description VARCHAR(200) NOT NULL,
Dropdate DATE NOT NULL,
Pickupdate DATE NOT NULL,
Address VARCHAR(50) NOT NULL,
)";




$conn->close();
?>