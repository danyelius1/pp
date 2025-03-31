<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "users";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Patikrinti, ar vartotojas spaudė „Ištrinti“
if (isset($_GET['delete'])) {
    $id = (int) $_GET['delete'];
    $conn->query("DELETE FROM users WHERE id=$id");
    header("Location: users.php"); // Perkrauti puslapį po trynimo
    exit;
}

$sql = "SELECT * FROM users";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vartotojai</title>
    <link rel="stylesheet" href="./styles/table.css">
</head>
<body>
<h2>Vartotojų sąrašas</h2>
<table border="1">
    <tr>
        <th>ID</th>
        <th>Vardas</th>
        <th>Pavardė</th>
        <th>Amžius</th>
        <th>Data</th>
        <th>Veiksmas</th>
    </tr>
    <?php while ($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['surname']) ?></td>
            <td><?= $row['age'] ?></td>
            <td><?= $row['date'] ?></td>
            <td>
                <a href="users.php?delete=<?= $row['id'] ?>" onclick="return confirm('Ar tikrai norite ištrinti?')">Ištrinti</a>
            </td>
        </tr>
    <?php endwhile; ?>
</table>
</body>
</html>

<?php $conn->close(); ?>
