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

// Insert data into a table named "table2"
$tableName = "checkout_form";


$sql = "INSERT INTO $tableName (name,email,city,payment,cardnumber,ed,cvv)
        VALUES ('$_POST[name]','$_POST[email]', '$_POST[city]','$_POST[payment]','$_POST[cardnumber]','$_POST[ed]','$_POST[cvv]')";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>


