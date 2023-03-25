<form method = 'post'>
<button name = "button"> Посчитать кол-во символов и кол-во слов</button>
<textarea name = "area" cols = "40" rows = "5" >
    Введите текст </textarea>
</form>


<?php

//1 Регулярные выражения
//a.
$reg = '/a..b/';
$str = 'ahb acb aeb aeeb adcb axeb';
$array= [];
 preg_match_all($reg,$str,$array);
 echo"Искомые строки:<br>";
 var_dump($array);

//b
echo "<br>";
echo "Замена чисел в строке:","<br>";
 $str = 'a1b2c3';
 $replacements=[1,8,27];
 $patterns=['/1/','/2/','/3/'];
 echo preg_replace($patterns, $replacements, $str), "<br>";

//2 Форма. Сессии и Куки

//a
if(isset($_POST['button']))
{
    $text = $_POST['area'];
    $words = 1;
    $chars = strlen($text);
   
    for($i=0;$i<$chars;$i++)
    {
        if($text[$i] == ' ')
        {
            $words++;
        }
    }

    echo "<br> Кол-во слов:$words";
    echo "<br> Кол-во символов:$chars";
}
?>


