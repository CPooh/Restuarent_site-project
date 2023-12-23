<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "new_system";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create a table named "checkout"
$tableName = "checkout_TABLE";
$sql = "CREATE TABLE $tableName (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(30) NOT NULL,
    email VARCHAR(30) NOT NULL,
    city VARCHAR(50),
    payment VARCHAR(90),
    cardnumber VARCHAR(50),
    expiredate VARCHAR(50),
    cvv VARCHAR(50)
   


   
)";

if ($conn->query($sql) === TRUE) {
    echo "Table created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Close connection
$conn->close();
?>
