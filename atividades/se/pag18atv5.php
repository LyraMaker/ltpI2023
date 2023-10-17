<?php

$a = false; $b = true; $c = false;
$x = 1.5; $y = 3.2; $x+=1;

if ($c || (($x + $y > 5) || (!$a && $b))){
    $l = 0;
}else{
    $l = 1;
}

echo $l;

