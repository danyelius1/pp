<?php
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $age = (int) $_POST['age'];
    $date = $_POST['date'];

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "users";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("error: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO users (name, surname, age, date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssis", $name, $surname, $age, $date);

    if ($stmt->execute()) {
        echo "yes";
        header("Location: index.php");
        exit;
    } else {
        echo "error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registracija</title>
    <link rel="stylesheet" href="./styles/register.css">
</head>
<body>
<form action="" method="post">
    <label for="name">Name:</label>
    <input type="text" name="name" id="name" required><br>

    <label for="surname">Surname:</label>
    <input type="text" name="surname" id="surname" required><br>

    <label for="age">Age:</label>
    <input type="number" name="age" id="age" required><br>

    <label for="date">Data:</label>
    <input type="date" name="date" id="date" required><br>

    <input type="submit" name="submit" value="Registruotis">
</form>
</body>
</html>
