<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="sokcfdi/dashboard.css">
    <title>Document</title>
</head>
<body>

<main class="container">

    <form action="insert.php" method="post">
        <div>
            <div class="textarea"><label for="post"></label><textarea name="post" id="post" cols="40" rows="2" placeholder="What`s on your mind?"></textarea></div>
        </div>
        <div class="submit_bottom">
            <input type="submit" name="submit" id="submit" value="POST">
        </div>
        <div class="postings">
            <?php

                $servername = "localhost";
                $username = "root";
                $password = "password";
                $dbname = "social_network";

                $conn = new mysqli ($servername, $username, $password, $dbname);

                $sql = "SELECT * FROM posts";

                $result = $conn->query($sql);
                        echo "<ul>";
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) : ?>

                            <li><?php echo $row["text"]; ?></li>

                <?php
                endwhile;
                echo "</ul>";
                }
                $conn->close();


            ?>
        </div>
        <div>

        </div>
    </form>

</main>

</body>
</html>


