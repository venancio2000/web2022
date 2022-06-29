<?php

$idadeList = [21, 23, 19, 25];

$idadeList[count($idadeList)] = 20;

foreach ($idadeList as $idade){
    echo $idade . PHP_EOL;
}

