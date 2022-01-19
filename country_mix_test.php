<?php
// $county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
// 2. Kwale. – Salim Mvurya – Jubilee";

// // function kenyanGovernors($county_data){    
// //     $data1 = preg_replace('/[^a-zA-Z0-9_ -]/s',' ',$county_data);
// //     echo $data1;
// //     $arr1 = explode(" ", $data1);
// //     print_r(array_filter(array_map("trim",$arr1)));
// // };

// function sanitizer($county_data){
//     $arr = explode(",", $county_data);
//     $str = "";
//     foreach(array_chunk($arr, 1) as $sub){
//         $str .= trim(implode(",", preg_replace('/[^A-Za-z0-9\-\(\) ]/', '', $sub))) . "\n";
//     }
//     echo($str);
// }

// function wazito ($county_data){
//     // @TODO : Your code starts here
// $extrapolateData = explode(",",$county_data);
// $arrlength = count($extrapolateData);
// $unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");


// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kenya County mix</title>
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.2/css/bulma.min.css">
    <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
</head>

<body>
<nav class="navbar" role="navigation" aria-label="main navigation">
  <div class="navbar-brand">
    <a class="navbar-item" href="https://bulma.io">
    </a>
  </div>


    </div>
  </div>
</nav>
        <div class="container">
			<table id="parties" class="table is-bordered">
          <thead>
            <tr>
              <th>#Rank </th>
              <th>Name</th>
              <th>Governor</th>
              <th>Party</th>
              <th>Website</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $n=1;

            for($x = 0; $x < $arrlength; $x++) {
              $getData = explode(" – ",$extrapolateData[$x]);
              $datalength = count($getData);?>
            <tr>

              <td><?php echo $n++?></td>

              <td>
                <?php
				$unwantedCharacters = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
				 echo $countyName = str_replace($unwantedCharacters, "",$getData[0]);
              ?>
              </td>

			  <td>
        <?php
 echo $getData[1];
 if(!empty($getData[2] =="ODM")){
         ?>
         <img src="odm.jpg"/>
       <?php }  ?>
              </td>

              <td><?php
              if(!empty($getData[2])){
                if($getData[2] == "WDM K."){
                  echo "WDM K";
                }else{
                  echo $getData[2];
                }
              }
              else {
                if(strpos($getData[1],"- Jubilee")){
                  echo "Jubilee";

                }
                elseif(strpos($getData[1],"- ODM")){
                    echo "ODM";
                }
              }?></td>

              <?php
                $countyName = str_replace($unwantedCharacters, "", $getData[0]);

				$unwantedValuesinlink = array('-'," "," ' ");
                $link = (str_replace($unwantedValuesinlink, '', $countyName));?>

        <td><a target="_BLANK"
            href="http://<?php echo $link?>.go.ke">http://<?php echo $link;?>.go.ke</a></td>
            </tr>
            <?php
              }
            ?>
          </tbody>
        </table>
		</div>
</body>

</html>




