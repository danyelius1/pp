<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "notes_app";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM notes";

$result = $conn->query($sql);
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo $row["name"]  . $row["task"] . $row["date"] . "<br>";
    }
}