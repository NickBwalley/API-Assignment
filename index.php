$shop = array(
    array("rose",   1.25, 15),
    array("daisy",  0.75, 25),
    array("orchid", 1.15, 7 ),
);


<table>
     <tr>
       <td>title</td>
       <td>price</td>
       <td>number</td>
     </tr>
     <? foreach ($shop as $row) : ?>
     <tr>
       <td><? echo $row[0]; ?></td>
       <td><? echo $row[1]; ?></td>
       <td><? echo $row[2]; ?></td>
     </tr>
     <? endforeach; ?>
   </table>