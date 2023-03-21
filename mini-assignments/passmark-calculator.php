<?php
$mark = 100;

$isSameMark = $mark === TOTAL_MARK;
print($isSameMark);
$isSameMark = $mark == TOTAL_MARK;
print($isSameMark);
$isSameMark = $mark = TOTAL_MARK;
print($isSameMark);




if ($mark === TOTAL_MARK) {
    print_r('Full Mark');
} elseif ($mark > 40) {
    print_r('Pass');
} else {
    print_r('fail');
}