<?php
// a string of county data
$county_data = "1. Mombasa. – Hassan Ali Joho – ODM,
2. Kwale. – Salim Mvurya – Jubilee,
3. Kilifi. – Amason Jeffah Kingi – ODM,
4. Tana River. – Dhadho Godhana – ODM,
5. Lamu. – Fahim Yasin Twaha – Jubilee,
6. Taita-Taveta. – Granton Samboja – WDM K,
7. Garissa. – Ali Bunow Korane – Jubilee,
8. Wajir. – Ahmed Ali Muktar – Jubilee,
9. Mandera. – Ali Ibrahim Roba – Jubilee,
10. Marsabit – Mohamud Mohamed Ali – Jubilee,
11. Isiolo – Mohamed Abdi Kuti – Independent,
12. Meru – Kiraitu Murungi – Jubilee,
13. Tharaka Nithi – Onesmus Muthomi Njuki – Jubilee,
14. Embu – Martin Nyaga Wambora – Jubilee,
15. Kitui – Charitu Ngilu – Narc Kenya,
16. Machakos – Alfred Mutua – MCC,
17. Makueni – Kivutha Kibwana – WDM K.,
18. Nyandarua – Francis Kimemia – Jubilee,
19. Nyeri – Mutahi Kahiga – Jubilee,
20. Kirinyaga. – Ann Waiguru – Jubilee,
21. Murang’a – Mwangi wa iria – Jubilee,
22. Kiambu. – James K Nyoro – Jubilee,
23. Turkana. – Josphat Nanok – ODM,
24. West Pokot. – John Krop Lonyang’apuo. – KANU,
25. Samburu. – Moses Kasainie Lenolkulal – Jubilee,
26. Trans-Nzoia. – Patrick Khaemba – FORD Kenya,
27. Uasin gishu. – Jackson Mandago – Jubilee,
28. Elgeyo Marakwet. – Alex Tanui Tolgas – Jubilee,
29. Nandi. – Stephen Sang – Jubilee,
30. Baringo – Stanley K Kipris. – Jubilee,
31. Laikipia – Ndiritu Muriithi – Independent,
32. Nakuru. – Lee Kinyanjui – Jubilee,
33. Narok – Samuel Kuntai Ole Tunai – Jubilee,
34. Kajiado. – Joseph Ole Lenku – Jubilee,
35. Kericho. – Prof.Paul Chepkwony Kiprono – Jubilee,
36. Bomet. – Hillary Barchok – Jubilee,
37. Kakamega. – Wyclife Oparanya – ODM,
38. Vihiga. – Wilber Ottichilo – ODM,
39. Bungoma. – Wyclife Wafula Wangamiti – ODM,
40. Busia. – Sospeter Ojaamong – ODM,
41. Siaya. – Cornel Rasanga. – ODM,
42. Kisumu. – Peter Anyang Nyong’o. – ODM,
43. Homabay. – Cyprian Awiti – ODM,
44. Migori. – Zachary Okoth Obado – ODM,
45. Kisii. – James Ongware – ODM,
46. Nyamira. – Amos Kimwomi Nyaribo – ODM,
47. Nairobi. – Ann Kananu – Jubilee";


//@NOTE : You should NOT modify anything above this line

// Your code starts here

$myDataSet = explode(",",$county_data);
$lengthOfArray = count($myDataSet);
$gibberishChar = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Assignment3 - 122790</title>
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
              <th>County Number</th>
              <th>Name</th>
              <th>Governor</th>
              <th>Party</th>
              <th>Website</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $n=1;

            for($i = 0; $i < $lengthOfArray; $i++) {
              $findDataSet = explode(" – ",$myDataSet[$i]);
              $datalength = count($findDataSet);?>
            <tr>

              <td><?php echo $n++?></td>

              <td>
                <?php
				$gibberishChar = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9","."," ' ");
				 echo $countyName = str_replace($gibberishChar, "",$findDataSet[0]);
              ?>
              </td>

			  <td>
        <?php
 echo $findDataSet[1];
 if(!empty($findDataSet[2] =="ODM")){
         ?>
         <!-- <img src="odm.jpg" alt="missing"/> -->
       <?php }  ?>
              </td>

              <td><?php
              if(!empty($findDataSet[2])){
                if($findDataSet[2] == "WDM K."){
                  echo "WDM K";
                }else{
                  echo $findDataSet[2];
                }
              }
              else {
                if(strpos($findDataSet[1],"- Jubilee")){
                  echo "Jubilee";

                }
                elseif(strpos($findDataSet[1],"- ODM")){
                    echo "ODM";
                }
              }?></td>

              <?php
                $countyName = str_replace($gibberishChar, "", $findDataSet[0]);

				$gibberishCharLink = array('-'," "," ' ");
                $link = (str_replace($gibberishCharLink, '', $countyName));?>

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