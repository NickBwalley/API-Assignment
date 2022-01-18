<?php
$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee";

function kenyanGovernors($county_data){
    $array =  preg_replace('/[^A-Za-z0-9\-\(\) ]/', '', $county_data);
    echo($array) ;
    // $round = count($county_data);
    
    // for($n = 0; $n < $county_data; $n++ ){
    //     echo($county_data[$n]);
    //     echo("<br>");
    // }


    /*$myNewArr1 = preg_split("/\,/", $county_data);
    print_r($myNewArr1);
    $array2 = preg_split("/\./", $myNewArr1);
    print_r($array2);*/

    
    // if($myNewArray = explode(",", $county_data)){
    //     echo("<br>");
    // }
    // $myNewArray2 = implode($myNewArray);
    // echo($myNewArray2);

    // print_r($myNewArray);

};

kenyanGovernors($county_data);

// echo("<br><br>");

// $str = "hello friend";

// $arr1 = str_split($str);
// $arr2 = str_split($str, 3);

// print_r($arr1);
// print_r($arr2);


?>