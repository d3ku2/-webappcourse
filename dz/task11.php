<?php
$values = ["ru","eng"];
$lang = $values[rand(0,1)];
$arr = [];
$a = a(
    "ru" => a(
        "Понедельник", "Вторник", "Среда", "Четверг", "Пятница", "Суббота", "Воскресенье"),
    "eng" => a(
        "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday"));
echo "\$lang = $lang";
echo "<br>";
if($lang == "ru") $arr = $array["ru"];
if($lang == "eng") $arr = $array["eng"];
echo implode(",",$arr);
echo "<br>";
switch ($lang) {
    case 'ru':
        $arr = $a["ru"];
        break;
    case 'eng':
        $arr = $a["eng"];
        break;
}
echo implode(",",$arr);
echo "<br>";
$arr = $a[$lang];
echo implode(",",$arr);