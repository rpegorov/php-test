<?php

$m = "hello";
 		$say = function () { 
echo $m;

        };
$say(); //Результат вызова

// в таком варианте ничего не выведет, так как переменная "m" не определена в строке 5

?>