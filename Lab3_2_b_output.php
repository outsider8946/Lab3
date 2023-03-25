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
    <title>Document</title>
</head>
<body>
    <form action="Lab3_2_b_fill.php" method="get">
        <?php
        echo "Имя:", $_SESSION["surname"], "<br>";
        echo "Фамилия:", $_SESSION["name"], "<br>" ;
        echo "Возраст:", $_SESSION["age"] , "<br>";
        ?>
    </form>
</body>
</html>