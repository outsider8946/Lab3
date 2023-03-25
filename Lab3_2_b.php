<form action = "Lab3_2_b_fill.php" method = 'post'>
    <input type="text" name="surname" placeholder="Введите фамилию">
    <input type="text" name="name" placeholder="Введите имя">
    <input type="text" name="age" placeholder="Введите возраст">
    <input type="submit" name =  "button">
</form>


<?php
session_start();

if (isset($_POST))
{
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["age"] = $_POST["age"];
    exit();
}

?>


