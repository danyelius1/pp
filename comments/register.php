<?php
if (isset($_POST['submit'])) {

    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "social_network";

    $name = $_POST['name'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $password1 = $_POST['password'];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        echo "no " . $conn->connect_error;
    }

    $query = "INSERT INTO users (name, lastname, email, password) VALUES ('$name', '$lastname', '$email', '$password1')";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        echo "Error: " . $query . "<br>" . $conn->error;
    } else {
        Header("Location: register.php");
    }

}


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>register</title>
</head>
<body>

<main class="container">

    <form action="register.php" method="post">

        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required>

        <label for="last-name">Last-Name:</label>
        <input type="text" name="lastname" id="last-name" required>

        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>

        <label for="password">Password:</label>
        <input type="password" name="password" id="password">

        <label for="submit"></label>
        <input type="submit" name="submit" id="submit">

    </form>

</main>




</body>
</html>