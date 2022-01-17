<?php
    if (isset($_GET['age']) && ctype_digit($_GET['age'])) {
        $age = $_GET['age'];

        if($age > 0 && $age <= 12) {
            echo 'Child!';
        } else if($age > 12 && $age <= 19) {
            echo 'Teenie !';
        } else if($age < 30) {
            echo 'Yout!';
        }
        else{
            echo 'Mzito!';
        }
    } else if (isset($_GET['age']) && !ctype_digit($_GET['age'])){
        echo '<script>alert("Only Integers are Allowed!..")</script>';
    }
    
    
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Age Calculator</title>
</head>
<body>
    <form method="get" action="greeter.php">
    Please Enter your Age:
    <p>
        <input type="text" name="age">
    </p>
    <input type="submit" value="Salimia Me">
    </form>
    
</body>
</html>