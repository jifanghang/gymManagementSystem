<?php
$servername = "localhost";
$username = "root";
$password = "09tc42";
$dbname = "gymManagementProject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ( ! empty($_POST['lastName'])){
    $lastName = $_POST['lastName'];
}

$sql = "SELECT customer.cFirstName, customer.cLastName FROM customer WHERE cLastName='$lastName'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while ($row = $result->fetch_assoc()) {
        echo "First name: " . $row["cFirstName"] . " Last name: " . $row["cLastName"] .  "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>