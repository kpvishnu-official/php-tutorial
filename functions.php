<?php

$name = 'vishnu';
$student = ['name' => 'vishnu', 'roll_no' => 10];

saveData($student);

function saveData(array $studentDetails): void
{
    $json = json_encode($studentDetails);
    file_put_contents(__DIR__ . '/student.json', $json);
}

$name = getName();
function getName(): string
{
    return 'vishnu';
}

$sum = sumOfTwoNumbers(1, 2);

function sumOfTwoNumbers(int $numberOne, int $numberTwo): int 
{
    return $numberOne + $numberTwo;
}