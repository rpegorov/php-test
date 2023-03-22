<?php

$m = "hello";
$say = function () use (&$m) {
echo $m;
};

$m = "how are you?";
$say(); //Результат вызова

// вывод "how are you?", так как используется наследование по ссылке - &$m
?>