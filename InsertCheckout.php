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
$tableName = "checkout_table";


$sql = "INSERT INTO $tableName (name,email,city,payment,cardnumber,expiredate,cvv)
        VALUES ('$_POST[name]', '$_POST[email]', '$_POST[city]','$_POST[payment]','$_POST[cardnumber]','$_POST[expiredate]','$_POST[cvv]')";

if ($conn->query($sql) === TRUE) {
    echo " <script>alert('Data inserted successfully.');
window.location.href='Home_1.php';
</script>";
} else {
    echo "Error inserting data: " . $conn->error;
}

// Close connection
$conn->close();
?>