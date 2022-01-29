<?php

function dividers($num) {
    for($i = 1; $i <= $num; $i++) {
        if ($num % $i == 0) {
            $divArray[] = $i;
        }
    }
    //print_r($divArray);
    foreach($divArray as $value) {
        echo $value . PHP_EOL;
    }
}

function check_prime($num)
{
    while(is_numeric($num)){
        if ($num == 1) {
        return 0;
        }
        for ($i = 2; $i <= $num/2; $i++)
        {
            if ($num % $i == 0){
                return 0;
            }
        }
        return 1;
    }
}

function main() {
    $num = readline("Please give me the number!". PHP_EOL);
    $val = check_prime($num);
    if ($val == 1) {
        echo PHP_EOL . "It is a prime number" . PHP_EOL;
    }else{
        echo "It is a non-prime number" . PHP_EOL;
        echo "Dividers: " . PHP_EOL;
        dividers($num);
    }
    
}

main();