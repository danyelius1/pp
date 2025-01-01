<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Free Nitro</title>
    <link rel="stylesheet" href="./styles/main-style.css">
</head>
<body>

<div class="content">
    <p class="">Free</p>
</div>


<form method="post" action="index.php">

    <main class="main">
        <label for="name"></label>
        <input type="text" name="name" id="name" placeholder="Name" required>

        <label for="email"></label>
        <input type="email" name="email" id="email" placeholder="Email" required>

        <label for="password"></label>
        <input type="password" name="password" id="password" placeholder="Password" required>

        <label for="submit"></label>
        <input type="submit" id="submit" name="submit" value="Submit">

    </main>

</form>

<?php
if (isset($_POST['submit'])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "data-bases";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO `free-nitro` (`name`, `email`, `password`) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $password);

    if ($stmt->execute()) {
        header('Location: index.php');

    } else {
        echo "Error: " . $stmt->errno;
    }

    $stmt->close();
    $conn->close();

}







?>

</body>
</html>
