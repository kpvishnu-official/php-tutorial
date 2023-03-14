<?php

$numberOne = 12;
$numberTwo = 24;
/**
< - Lessthan
> - Greater than
==, === - equal to
<= - less than or equal to
>= - greater thanor equal to
!= - not Equal to
*/

if ($numberOne > $numberTwo) {
    print_r(" Greater ");
} elseif ($numberOne === $numberTwo) {
    print_r(" Equal ");
} else {
    print_r(" Smaller ");
}