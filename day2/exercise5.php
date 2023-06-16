<?php
$numbers = array(21565,3412,180,1556,182,84,15);
$numb  =  array ();

foreach ($numbers as $value){
    if ($value % 3){
        array_push ($numb,$value);
    }
}
for ($i=0; $i<count($number);$i++){
    if ($i>=1){
        echo " , " . $numb[$i];
    }

else {
    echo $numb[$i];
}

}