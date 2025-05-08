<?php

if (isset($_POST["submit"])) {

    $servername = "localhost";
    $username = "root";
    $password = "password";
    $dbname = "social_network";

    $post = $_POST['post'];



    $conn = new mysqli ($servername, $username, $password, $dbname);

    $sql = "INSERT INTO posts (text) VALUES ('$post');";

    $resolt = mysqli_query($conn, $sql);

    if (!$resolt) {
        echo 'no';
    }else {
        echo '';
    }
}

header( "location: comment_page.php");

?>