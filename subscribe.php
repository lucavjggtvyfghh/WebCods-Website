<?php
$servername = "mysql.hostinger.in";
$username = "u307385615_test";
$password = "testing";
$database="u307385615_test";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Subscriber(name,email) VALUES ('testing','".$_POST['email']."')";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: http://webcods.in/thank_you.html");
exit;

?>