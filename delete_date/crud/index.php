<?php

if (isset($_POST['submit'])) {

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud";

    $name = $_POST['name'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    $sql = "INSERT INTO users (name) VALUES ('$name')";

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
    <title>crud</title>
</head>
<body>

<form action="index.php" method="post">

    <label for="name"></label>
    <input type="text" name="name" id="name" placeholder="name">

    <input type="submit" name="submit" id="submit">

</form>

</body>
</html>