<?php
                
$numberList = [1,2,3,4,5,6];

for ($i=0; $i<6; $i++) {
    print_r($numberList[$i]);
}

for ($i=0; $i<6; $i=$i+2) {
    print_r($numberList[$i]);
}

for ($i=2; $i<6; $i++) {
    print_r($numberList[$i]);
}

for ($i=5; $i>=0; $i--) {
    print_r($numberList[$i]);
}

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

$number = 0;
while ($number < 10) {
    $number = $number + 1;
    print_r('test');
}

do {
    echo '<br>';
    print_r($number);
    echo '<br>';
    print_r('test');
} while ($number < 0);








