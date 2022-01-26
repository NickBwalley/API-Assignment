<?php
$input1 = ["archeNland Limtded",["£100","-1","200","300","-700",678]];
$input2 = ["narnIa Geselmlchab","$530,-23,670,3,negative1299"];
$input3 = ["name" => "loneIslands proprtieary","amount" => "7568-39-49-37-3000-98"];


function sanitizer($input){

  $name = $input[0];
  //alternate flow
  //$names = explode(" ",$name);
  //$first = $names[0];
  //$second = $names[1];

  $first = substr($name,0,strpos($name," "));
  $second = substr($name,strpos($name," ")+1);

  $second_array = str_split($second);
  $second_str = $second_array[0].
                     $second_array[count($second_array)/2].
                     $second_array[count($second_array)-1];
  $name = ucwords(strtolower($first." ".$second_str));
  echo "<tr>
          <td>$name</td>
          <td></td>
          <td></td>
          <td></td>
        </tr>";
}

?>

<table>
  <thead>
    <tr>
      <th>Company</th>
      <th>Amounts</th>
      <th>Debits</th>
      <th>Balance</th>
    </tr>
  </thead>
  <tbody>
    <?=sanitizer($input1)?>
    <?=sanitizer($input2)?>
    <?=sanitizer($input3)?>
  </tbody>
</table>