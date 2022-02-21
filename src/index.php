<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Electricity_bill_php</title>
</head>
<body>

<form method="post" >
    <h1>Know your Electricity bill from 0-above250unit</h1>    

    <input type = "text" name="search" placeholder ="Enter the units">
    <input type = "submit" name="button" value = "Submit">
</form>

<?php

$unit = $_POST['search'];
$result= 0;
if($unit <50){
    $result= $unit*3.50;
    
}
elseif($unit>50 && $unit<100){
    $result = $unit*4.00;
}
elseif($unit>100 && $unit<250){
    $result= $unit*5.20;
}
else {
    $result = $unit*6.50;
}
echo "<br>";
echo "Your bill is  $result";



?>

</body>
</html>