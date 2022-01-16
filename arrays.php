<?php
    
    // INDEXED AND NUMERIC ARRAY
    $country_names = array('Kenya', 'Uganda', 'Tanzania', 'Ethiopia', 'Egypt');
    // traversing through an indexed array
    // using a foreach loop
    foreach($country_names as $val){
        // echo($val . "\n");
    }
    $round = count($country_names);
    // echo("\nThe number of elements are $round \n");
    
    //using for loop
    for($n = 0; $n < $round; $n++){
        // echo $country_names[$n], "\n";
    }
    
    // ASSOCIATIVE ARRAY
    $capital_cities = array("Kenya"=>"Nairobi", "Uganda"=>"Kampala", "Tanzania"=>"Dodoma");
    $capital_cities2["Mali"] = "Bamako";
    $capital_cities2["Ethiopia"] = "Addis Ababa";
    $capital_cities2["United States"] = "Washington DC";
    $capital_cities2["Germany"] = "Berlin";
    // echo $capital_cities2["Mali"] . "\n";
    // echo $capital_cities2["Tanzania"]; 

    // traversing through an associative array. 
    // using foreach loop
    foreach($capital_cities as $val => $val_value){
        // echo "The capital city of " . $val . " is ". $val_value . "\n";
    }

    // using for loop
    $keys = array_keys($capital_cities2);
    $round = count($capital_cities2);

    for($i = 0; $i < $round; ++$i){
        // echo $keys[$i]. " " . $capital_cities2[$keys[$i]] . "\n";
    }

    
    // MULTIDIMENSIONAL ARRAY
    $favorites = array(
        array(
            "name" => "Dave Bucks", 
            "mobile" => "0711333444",
            "email" => "davebucks@gmail.com",
        ),
        array(
            "name" => "Allan Smith", 
            "mobile" => "0712444355",
            "email" => "allansmith@gmail.com",
        ),
        array(
            "name" => "Lewis Hamilton", 
            "mobile" => "0714333549",
            "email" => "lewishamilton@gmail.com",
        ), 
    );

    echo "Allan smith mobile-number is: ". $favorites[1]["mobile"] . "\n";
    echo "Lewis Hamilton email-address is: ". $favorites[2]["email"] . "\n";

    // traversing through MD Arrays
    $favorites2 = array(
        "Dave Bucks" => array(
            "mobile" => "0711333444",
            "email" => "davebucks@gmail.com",
        ),
        "Allan Smith" => array(
            "mobile" => "0712444355",
            "email" => "allansmith@gmail.com",
        ),
        "Lewis Hamilton" => array(
            "mobile" => "0714333549",
            "email" => "lewishamilton@gmail.com",
        ), 
    );

    // using for and foreach in nested form. 
    $keys = array_keys($favorites2);

    for($i = 0; $i < count($favorites2); $i++){
        echo $keys[$i] . "\n";
        foreach($favorites2[$keys[$i]] as $key => $value){
            echo $key . " : " . $value . "\n";
        }
        echo "\n";
    }


?>