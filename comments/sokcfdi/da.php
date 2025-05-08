<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<form action="da.php" method="post">

    <label for="number">Enter number for count , but cant count number biggest 1000.</label>
    <input type="number" name="number" id="number" placeholder="Number" required>

    <label for="submit"></label>
    <input type="submit" name="submit" id="submit" value="count">

</form>

<?php

$number = $_POST['number'];

if(isset($_POST['submit'])){
    for ($i = 1; $i <= $number; $i++) {
        echo $i . "<br>";

        if ($number >= 1000) {
            die("All lot of symbols!");
        }
    }
}


?>

<fieldset><legend>count number:</legend><?php echo $number; ?></fieldset>



</body>
</html>