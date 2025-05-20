<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "notes_app";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM notes";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../../Webkit/styles/reset.css">
    <link rel="stylesheet" href="../assets/styles/main.css">

    <title>Notes</title>
</head>
<body>

<main class="flex flex-wrap flex-center">
    <?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()): ?>

            <div class="note flex flex-column">
                <h1 class="note-title"><?php echo $row["name"]; ?></h1>
                <p class="note-description"><?php echo $row["task"]; ?></p>
                <p class="note-date"><?php echo $row["date"]; ?></p>
            </div>

    <?php
        endwhile;
    }
    ?>


</main>

<footer class="flex flex-right">
    <button class="cta-button">
        <img src="../assets/images/pencil.png" alt="Add new note">
    </button>
</footer>

</body>
</html>