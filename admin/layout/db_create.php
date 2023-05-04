<?php 
require("./db.php");

$sql = "CREATE TABLE student(
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(500) NOT NULL,
    mobile VARCHAR(500) NOT NULL,
    email VARCHAR(500) NOT NULL,
    total VARCHAR(500) NOT NULL,
    cut VARCHAR(500) NOT NULL,
    ten VARCHAR(500) NOT NULL,
    gro VARCHAR(500) NOT NULL,
    password VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table student created successfully<br>";
} else {
    echo "Error creating table:student";
}

$sql = "CREATE TABLE course (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    total VARCHAR(500) NOT NULL,
    cut VARCHAR(500) NOT NULL,
    gro VARCHAR(500) NOT NULL,
    ten VARCHAR(500) NOT NULL,
    course VARCHAR(500) NOT NULL,
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table course created successfully<br>";
} else {
    echo "Error creating table:course ";
}





?>