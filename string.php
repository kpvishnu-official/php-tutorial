<?php
$name = 'Santhosh K R';

print_r($name);
echo '<br>';
print_r(str_word_count($name));
echo '<br>';
$replacedName = str_replace(' K R', '', $name);
echo '<br>';
print_r(strrev($name));
echo '<br>';
print_r(str_ireplace(['K', 'R', 'San'], '', $name));