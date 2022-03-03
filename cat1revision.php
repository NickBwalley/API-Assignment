<?php

$transaction_string = "2:7, 10:14, 6:2";

$ts_array = explode(",", $transaction_string );

echo($ts_array);

foreach ($ts_array as $t){
    // $t = "2:7"; // the output will be like this in this scenario. 
    // $t_array = explode(":", $t); // the output will be like [2,7] in this scenario
    // $first_number = $t_array[0];
    // $second_number = $t_array[1];
    // $sum = $first_number + $second_number;
    // $a = ['first_num' => $first_number, 'second_num' => $second_number];
    // $transaction_array[]
}


?>