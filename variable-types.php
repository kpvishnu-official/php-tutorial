<?php

 $name = 'Vishnu';// Global Variable

 $name = getName();
 function getName(): string 
 {
    $name = 'harry'; // local Variable

    return $name;
 }

 print($name);