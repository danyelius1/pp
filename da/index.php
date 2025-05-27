


<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="index_style.css">
    <title>da</title>
</head>
<body>

<main>
    <div class="main">


        <div>
            <div class="question">
                <h1>Kiek 2+1?</h1>
            </div>



            <form action="index.php" method="post">

                <label for="vienas">
                    <input type="radio" name="radio" id="vienas" value="vienas" required> 1
                </label>

                <label for="du">
                    <input type="radio" name="radio" id="du" value="du" required> 2
                </label>

                <label for="trys">
                    <input type="radio" name="radio" id="trys" value="trys" required> 3
                </label>

                <input class="submit" type="submit" name="submit" id="submit" value="answer">
            </form>
        </div>



        <div>
            <?php

            if (isset($_POST["submit"])) {

                $radio = $_POST["radio"];

                if ($radio == "trys") {
                    echo "<p class='alert1'>Teisingai</p>";
                } else {
                    echo "<p class='alert2'>Neisingai</p>";
                }

            }
            ?>
        </div>

    </div>
</main>

</body>
</html>










