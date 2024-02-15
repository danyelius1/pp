<?php
$servername="localhost";
$username="username";
$password="";
$dbname="login";

$conn = new mysqli($servername, $username, $dbname , $password);

if ($conn->connect_errno) {
    die("connection file: " . $conn->connect_error);
}

$sql = "INSERT INTO myguest(email, password)";

if ($conn->qery(sql) === TRUE) {
    echo "yra";
}
else {
    echo "ERROR :"  . $sql . "<br>" . $conn->error;
}

?>

