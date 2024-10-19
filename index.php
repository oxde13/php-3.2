<?php
//1. Определение переменных и констант:
$name = "Юлия";
$age = 39;
$isStudent = true;
define("CONSTANT", "Apple");
echo "Имя:" .$name;
echo " Возраст: " .$age;
echo " Студент: " .$isStudent;
echo " Название сайта: " .CONSTANT;
print " Имя:" .$name;
print " Студент: " .$isStudent;
// 2. Преобразование типов:
$numberString = "45";
$number = (int)$numberString;
$type =  gettype($number);
echo " Преобразованное число: " .$number;
echo " Тип переменной: " .$type;
//3. Использование операторов:
$num1 = 10;
$num2 = 5;
$sum = $num1 + $num2;
$subtraction = $num1 - $num2;
$multiplication = $num1 * $num2;
$division = $num1 / $num2;
$comparison = $num1 > $num2;
$is_true = ($num1 > $num2)&&($num1 < $num2);
$is_true2 = ($num1 > $num2)||($num1 < $num2);
echo " Сложение: " .$sum;
echo " Вычитание: " .$subtraction;
echo " Умножение: " .$multiplication;
echo " Деление: " .$division;
echo " Сравнение: " .$comparison;
// Логическое выражение
echo " Логическое выражение: " .$is_true;
echo " Логическое выражение2: " .$is_true2;

//4. Суперглобальная переменная $_SERVER:
echo "Информация о сервере: " . $_SERVER['SERVER NAME'];
echo "IP-адрес клиента: " . $_SERVER['REMOTE_ADDR'];
?>




