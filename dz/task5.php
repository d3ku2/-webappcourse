<?php
$array = ['Привет, ','мир','!'];
$array[0] = 'Пока, ';
foreach($array as $c) {
    echo $c;
}