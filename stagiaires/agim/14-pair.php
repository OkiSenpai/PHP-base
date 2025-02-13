<?php

$randomNum = mt_rand(1,20);

if ($randomNum % 2== 0) {
    echo "$randomNum est pair";
} else {
    echo "$randomNum est impair";
}