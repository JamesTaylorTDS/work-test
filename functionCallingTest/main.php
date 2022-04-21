<?php

include 'function.php';
echo "Which function would you like to run?\n";
echo "first\n";
echo "numberCars\n";
echo "test\n";
fscanf(STDIN, "%d\n", $function);
switch ($function){
    case "first":
        first();
        break;
    case "numberCars":
        numberCars();
        break;
    case "test":
        test();
        break;
}