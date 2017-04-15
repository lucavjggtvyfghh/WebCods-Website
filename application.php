<?php
$servername = "mysql.hostinger.in";
$username = "u307385615_test";
$password = "testing";
$database="u307385615_test";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO Candidate(name,phone,email,qualification,message) VALUES ('".$_POST['name']."','".$_POST['phone']."','".$_POST['email']."','".$_POST['qualification']."','".$_POST['message']."')";

if ($conn->query($sql) === TRUE) {

} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header("Location: http://webcods.in/step2.html");
exit;

?>