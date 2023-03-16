<?php
$mark = 30;
$totalMark = 100;

if ($mark === $totalMark) {
    print_r('Full Mark');
} elseif ($mark > 40) {
    print_r('Pass');
} else {
    print_r('fail');
}