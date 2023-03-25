<?php
session_start();

if (isset($_POST))
{
    $_SESSION["name"] = $_POST["name"];
    $_SESSION["surname"] = $_POST["surname"];
    $_SESSION["age"] = $_POST["age"];
    header('Location: /Lab3_2_b_output.php');
    exit();
}
