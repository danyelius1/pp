<?php

if (isset($_POST['submit'])) {

    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "delete_date";

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
    <title>Document</title>
</head>
<body>

<form action="index.php" method="post">

    <label for="name">Name:</label>
    <input type="text" name="name" id="name" placeholder="name" minlength="2" maxlength="50" required><br>

    <input type="submit" name="submit" id="submit" value="login" class="submit">

</form>



</body>
</html>