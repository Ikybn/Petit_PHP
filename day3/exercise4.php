<?php
function averageCalc($numbers){

    $sum=0;
    $nbElement=count($numbers);

}

foreach ($sum as $numbers) {
    $sum+=$numbers;
    $sum/$numbers;
}
$averageCalc=$sum/$numbers;
echo  "return result" . $averageCalc;

$nbArray=array (75,80,90,95,85);
$averageArray=averageCalc($nbArray);
echo "La moyenne du tableau est:" .$averageArray;

?>