<?php
//CPC №1. Часть 1
//Работа с переменными
//Задание 1
$a = 3;
$b = $a;
echo $b.'<br>';

//Задание 2
$a = 10;
$b = 2;
echo ($a + $b) / (($a + $b) / 2).'<br>';
echo ($a - $b) / (($a + $b) / 2).'<br>';
echo $a * $b / (($a + $b) / 2).'<br>';
echo $a / $b / (($a + $b) / 2).'<br>';

//Задание 3

$c = 15;
$d = 2;
$result = $c + $d;
echo $result.'<br>';

//Задание 4
$a = 10;
$b = 2;
$c = 5;
echo ($a + $b + $c) / (($a + $b + $c) / 3).'<br>';

//Задание5
$a = 17;
$b = 10;
$c = $a - $b;
$d = 17;
$result = $c + $d;
echo $result.'<br>';

//CPC №1. Часть 2
//Работа со строками
//Задание 1
$text = 'Привет, Мир!';
echo $text.' Моя первая программа!<br>';

//Задание 2
$text1 = 'Привет, ';
$text2 = 'Мир!';
echo $text1.$text2.'<br>';

//Задание 3
$name = 'Лёня';
echo 'Привет, '.$name.'!';
$text = 'Новый текст';
echo '<br>'.$text.'<br>';

//Задание 4
$age = 28;
$height = 300;
echo 'Мой возраст: '.$age.' | Мой рост: '.$height.'<br>';

//Задание 5
$text = 'abcde';
echo $text[0].' '.$text[2].' '.$text[4].'<br>';

//CPC №1. Часть 3
//Работа с массивами
//Задание 1
$arr = ['a', 'b', 'c'];
var_dump($arr);
echo '<br>';
for ($i = 0; $i < count ($arr); $i++){
    var_dump($arr[$i]);
    echo '<br>';
}

//Задание 2
echo $arr[0].$arr[1].$arr[2].'<br>';

//Задание 3
$arr = ['a', 'b', 'c', 'd'];
echo $arr[0].'+'.$arr[1].', '.$arr[2].'+'.$arr[3].', '.$arr[0].'-'.$arr[3].', '.$arr[0].'/'.$arr[3].'<br>';


//Задание 4
$arr = [2, 5, 3, 9];
$result = ($arr[0] * $arr[1]) + ($arr[2] * $arr[3]);
echo $result.'<br>';

//Задание 5
$arr[0] = 1;
$arr[1] = 2;
$arr[2] = 3;
$arr[3] = 4;
$arr[4] = 5;

//CPC №1. Часть 4
//Ассоциативные массивы
//Задание 1
$arr = ['a'=>11, 'b'=>20, 'c'=>30];
echo $arr['c'].' '.($arr['a'] + $arr['b'] + $arr['c']).'<br>';

//Задание 2
$arr = ['q3'=>12, 'r3'=>23, 'f3'=>34];
echo array_sum ($arr).'<br>';

//Задание 3
echo "<br>";
$arr = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
echo 'Зарплата Пети: '.$arr['Петя'].', зарплата Коли: '.$arr['Коля'].'<br>';

//Задание 4
$arr = [1=>'Январь', 2=>'Февраль', 3=>'Март', 4=>'Апрель', 5=>'Май', 6=>'Июнь',
    7=>'Июль', 8=>'Август', 9=>'Сентябрь', 10=>'Октябрь', 11=>'Ноябрь', 12=>'Декабрь'];
echo $arr['9'].' '.$arr['6'].'<br>';

//Задание 5
$arr = [1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'];
$day = 3;
echo $arr[$day];