<?php
session_start();
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>logout</title>
</head>
<body>

<form action="logout.php" method="post">

    <input type="submit" name="submit" id="submit" value="logout">

</form>

</body>
</html>

<?php

echo $_SESSION['email'] . "<br>";
echo $_SESSION['password'] . "<br>";

if (isset($_POST['submit'])) {

    session_destroy();
    header("location: index.php");

}

?>
