<?php

$servername = "localhost";
$username = "root";
$server_password = "password";
$dbname = "crud";

$conn = new mysqli($servername, $username, $server_password, $dbname);

$sql = "SELECT * FROM users";




$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        $record_id = $row["id"];
        echo  "<p>name:</p>" .  $row["name"] . "<p>password:</p>" . $row["password"] . "<hr>";
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
    <title>update</title>
</head>
<body>

<a href="update.php?id=<?php echo $record_id ?>">change</a>

</body>
</html>
