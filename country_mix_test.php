<?php
$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee";

// function kenyanGovernors($county_data){    
//     $data1 = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$county_data);
//     echo $data1;
//     $arr1 = explode(" ", $data1);
//     print_r(array_filter(array_map("trim",$arr1)));
// };

function sanitizer($county_data){
    $arr = explode(",", $county_data);
    $str = "";
    foreach(array_chunk($arr, 1) as $sub){
        $str .= trim(implode(",", preg_replace('/[^A-Za-z0-9\-\(\) ]/', '', $sub))) . "\n";
    }
    echo($str);
}

sanitizer($county_data)

?>





