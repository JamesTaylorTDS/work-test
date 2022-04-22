<?php

function first(){
    for($j=0;$j<=5;$j++){
        for($i=1;$i<=$j;$i++){
            echo"*";
        }
        echo"\n";
    }
    for($j=5;$j>=1;$j--){
        for($i=1;$i<=$j;$i++){
            echo"*";
        }
        echo"\n";
    } 
}

function numberCars(){
    $cars = array("Volvo", "BMW", "Toyota");
    echo count($cars);
}

function test(){
    echo "Hello and welcome to my show\n";
    echo "which movie would you like?\n";
    echo "1. Sunny\n";
    echo "2. Moody\n";
    echo "3. boring\n";
    fscanf(STDIN, "%d\n", $choice);
    switch ($choice) {
        case 1:
            echo "You have selected a sunny movie enjoy."; 
            break;
        case 2:
            echo "You have selected a moody movie enjoy.";
            break;
        case 3:
            echo "You have selected a boring movie enjoy.";
            break;
    }

}

echo "Which function would you like to run?\n";
echo "- first\n";
echo "- numberCars\n";
echo "- test\n";
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