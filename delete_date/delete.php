<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "delete_date";

$id = $_GET["id"];

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DELETE FROM users WHERE id='$id'";
$result = $conn->query($sql);

if ($result) {
    Header("Location: index.php");
    }
else {
    echo "Error";
}
$conn->close();