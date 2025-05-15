<?php

$servername = "localhost";
$username = "root";
$password = "password";
$dbname = "delete_date";

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "SELECT * FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()):
       ?>

        <?php echo $row["name"] . "<br>" .  $row["id"]; ?>
    <br>
    <a href="delete.php?id=<?php echo $row["id"]; ?>">Delete sita shaize</a>

<?php endwhile; ?>

<?php
} else {
    echo "0 results";
}

$conn->close();
