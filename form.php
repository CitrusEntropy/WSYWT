<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        $movies = ["Frozen", "Cars", "Hunger Games", "The Social Network", "Wolf of Wallstreet", "The Godfather"];
        //           "0-7",  "8-15",     "16-23",            "24-31",           "32-39",              "40+"

        if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["age"] >= 0)
        {
            $age = $_POST["age"];
            if ($age/8 >= 5) $age = 40;
            echo($movies[(int)($age/8)]);
        } else
        {
            header("Location: index.php");
        }

    ?>
</body>
</html>