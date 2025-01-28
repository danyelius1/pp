
<?php
include('db.php');

if (isset($_POST['submit'])) {
    $firstname = $_POST['first-name'];
    $lastname = $_POST['last-name'];
    $email = $_POST['email'];
    $phonenumber = $_POST['phone-number'];

    $postData = [
        'firstName' => $firstname,
        'lastName' => $lastname,
        'email' => $email,
        'phonenumber' => $phonenumber
    ];

    $ref_table = "contacts";
    $postRef = $database->getReference($ref_table)->push($postData);
}

?>

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

<form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">

    <label for="first-name"><input type="text" name="first-name" id="first-name" placeholder="first name" required></label>
    <label for="last-name"><input type="text" name="last-name" id="last-name" placeholder="last name" required></label>
    <label for="phone-number"><input type="number" name="phone-number" id="phone-number" placeholder="phone number" required></label>
    <label for="email"><input type="email" name="email" id="email" placeholder="email" required></label>
    <label for="submit"><input type="submit" name="submit" id="submit" value="log in"></label>

</form>

</body>
</html>
