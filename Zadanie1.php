<h1>Задание 1</h1> <?php
//Задание 1
//1.1
$a = 3;
$b = $a;
echo $b;

?><br><?php
//1.2
$a = 10;
$b = 2;
echo $a + $b;
echo $a - $b;
echo $a / $b;
echo $a * $b;

?><br><?php
//1.3
$c = 15;
$b = 2;
$result = $c + $b;
echo $result;

?><br><?php
//1.4
$a = 10;
$b = 2;
$c = 5;
echo ($a + $b + $c)/ (($a + $b + $c)/3);

?><br><?php
//1.5
$a = 17;
$b = 10;
$c =$a - $b;
$d = 17;
$result = $c + $d;
echo $result;

?><br><h1>Задание 2</h1><?php
//Задание 2
//2.1
$text = "Привет, мир!";
echo $text .= "Моя первая программа!";

?><br><?php
//2.2
$text1 = "Привет, ";
$text2 = "Мир!";
echo $text1.$text2;

?><br><?php
//2.3
$name = "Азат";
echo "Привет, ".$name;
$text = "\n Новый текст";

?><br><?php
//2.4
$age = 21;
$height = 189;
echo 'Мой возраст: '.$age.'| Мой рост: '.$height;


?><br><?php
//2.5
$text = 'abcde';
echo $text[0];
echo $text[2];
echo $text[4];

?><br><h1>Задание 3</h1><?php
//Задание 3
//3.1
$arr = ['a','b','c'];
var_dump($arr);

for ($i = 0; $i < count($arr); $i++) {
    var_dump($arr[$i]);
}

?><br><?php
//3.2
$str = "";
for ($i = 0; $i < count($arr); $i++) {
    $str .= $arr[$i];
}
echo $str;

?><br><?php
//3.3
$arr = ['a','b','c','d'];
echo $arr[0].'+'.$arr[1].','.$arr[2].'+'.$arr[1].','.$arr[0].'-'.$arr[3].','.$arr[0].'/'.$arr[3];
?><br><?php

//3.4
$arr = [2 ,5 ,3 ,9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo $result;
?><br><?php
//3.5
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[4] = 5;


?><br><h1>Задание 4</h1><?php
//Задание 4
//4.1
$arr = ['a'=>11,'b'=>20,'c'=>30];
echo $arr[c];
//var_dump($arr[c]);  ?

?><br><?php
//4.2
$arr = ['q3'=>12, 'r3'=>23, 'f3'=>34];
echo array_sum($arr);

?><br><?php
//4.3
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo "Петя ->".$arr['Петя'],"<br>";
echo "Коля ->".$arr['Коля'];
?><br><?php

//4.4
$mes = ['1'=>"январь", '2'=>"февраль",'3'=>"март",'4'=>"апрель",'5'=>"май",'6'=>"июнь",'7'=>"июль",'8'=>"август",'9'=>"сентябрь",'10'=>"октябрь",'11'=>"ноябрь",'12'=>"декабрь"];
echo $mes['9'],"<br>";
echo $mes['6'];

?><br><?php
//4.5
$day = 3;
$week = ['1'=>'Понедельник','2'=>'Вторник','3'=>'Среда','4'=>'Четверг','5'=>'Пятница','6'=>'Сббота','7'=>'Воскресенье'];
echo $week[$day];



















