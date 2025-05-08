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
    <link rel="stylesheet" href="style .css">
    <title>login</title>
</head>
<body>

<form action="index.php" method="post">

    <label for="email">Email:</label>
    <input type="email" name="email" id="email" placeholder="Email" minlength="2" maxlength="50" required><br>

    <label for="password">Password:</label>
    <input type="password" id="password" name="password" placeholder="Password" minlength="2" maxlength="50" required><br>

    <input type="submit" name="submit" id="submit" value="login" class="submit">

</form>

<?php

if(isset($_POST["submit"])){
    if (!empty($_POST['email'] || !empty($_POST['password']))){

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['password'] = $_POST['password'];

        header('Location: logout.php');
    }else {
        echo '';
    }
}

?>

</body>
</html>
