<?php

$servername = "localhost";
$username = "root";
$server_password = "password";
$dbname = "crud";

$id = $_GET['id'];

$conn = new mysqli($servername, $username, $server_password, $dbname);

$sql = "UPDATE users SET name = 'name' WHERE id = '3'";

mysqli_query($conn, $sql);
mysqli_close($conn);

?>


<?php

$servername = "localhost";
$username = "root";
$server_password = "password";
$dbname = "crud";

$conn = new mysqli($servername, $username, $server_password, $dbname);

$sql = "SELECT * FROM users WHERE id = '3'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>form</title>
</head>
<body>

<form action="update.php" method="post">

    <input type="text" name="name" id="name" required value="<?php echo $row['name']; ?>">
    <input type="password" name="password" id="password" required>

    <input type="submit" name="submit" id="submit">

</form>

</body>
</html>

