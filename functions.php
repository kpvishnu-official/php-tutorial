<?php

$name = 'vishnu';

$name = getName();

function getName(): string
{
    return 'vishnu';
}


/**
 * $numberOne integer
 * get the sum of Two Numbers
 */
function sumOfTwoNumbers(int $numberOne, int $numberTwo): int 
{
    return $numberOne + $numberTwo;
}