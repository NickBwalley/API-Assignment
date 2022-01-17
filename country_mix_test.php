<?php
$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee";

function kenyanGovernors($county_data){
    $myNewArray = explode(",", $county_data);
    print_r($myNewArray);
};

kenyanGovernors($county_data);

// echo("<br><br>");

// $str = "hello friend";

// $arr1 = str_split($str);
// $arr2 = str_split($str, 3);

// print_r($arr1);
// print_r($arr2);


?>