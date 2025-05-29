<?php

if (isset($_POST["submit"])) {

    $servername = "localhost";
    $username = "root";
    $server_password = "password";
    $dbname = "crud";

    $name = $_POST['name'];
    $password = $_POST['password'];

    $conn = new mysqli($servername, $username, $server_password, $dbname);

    $sql = "INSERT INTO users (name , password) VALUES ('$name', '$password')";
    mysqli_query($conn, $sql);

    mysqli_close($conn);

}


?>


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>

<form action="form.php" method="post">

    <input type="text" name="name" id="name" required>
    <input type="password" name="password" id="password" required>

    <input type="submit" name="submit" id="submit">

</form>

</body>
</html>