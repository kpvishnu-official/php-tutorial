<?php
$numberList = [1,2,3,4,5,6];

for ($i=0; $i<=5; $i++) {
    print_r($numberList[$i]);
}

$studentList = [
    60 => 'vishnu',
    12 => 'akhil',
    23 => 'santhosh',
    30 => 'abin',
];

echo '<br>';
foreach ($studentList as $rollno => $studentName) {
    print_r($studentName);
    echo '<br>';
    print_r($rollno);
    echo '<br>';
}

