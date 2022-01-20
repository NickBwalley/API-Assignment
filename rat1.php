<?php
$input1 = ["archeNland Limtded",["£100","-1","200","300","-700",678]];
$input2 = ["narnIa Geselmlchab","$530,-23,670,3,negative1299"];
$input3 = ["name" => "loneIslands proprtieary","amount" => "7568-39-49-37-3000-98"];

function sanitizer($input){
    
    $name = $input[0];
    //Archenland Ltd

    //@Option 1 
    $name_array = explode(" ", $name);
    /// var_dump($name_array);
    $first = $name_array[0];
    $second = $name_array[1];

    $first_letter = substr($second, 0, 1);
    $middle_letter = substr($second, (strlen($second) /2), 1);
    $last_letter = substr($second, -1, 1);

    echo $final_name = ucwords ( 
    strtolower($first).
    " "
    .$first_letter
    .$middle_letter.
    $last_letter
    );
    // $string = "Geselmlchab";
    
    // $getMidChar  = substr($string, (strlen($string) / 2 ), 1);
    // echo $getMidChar;
    // die(); 

    // @Option 2 
    // archeNland Limtded
    // $first = substr($name, 0, strpos($name, " "));
    // $second = substr($name, 0, strpos($name, " ")+1);
    
    
}

sanitizer($input1);

?>