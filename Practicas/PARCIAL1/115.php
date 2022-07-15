<?php 
for ($i=0; $i < 6 ; $i++) { 
    for ($j=0; $j < 10 ; $j++) { 
        $array[$i][$j]=rand(0,1000);
    }
}

for ($i=0; $i < 1000 ; $i++) {
    $aaux[$i]=$i;
}

shuffle($aaux);
$aaa=0;
for ($i=0; $i <6 ; $i++) {
    for ($j=0; $j <10 ; $j++) {
        $ep=rand(0, (count($aaux)-$aaa));
        $array[$i][$j]=$aaux[$ep];
        array_splice($aaux, $ep, 1);
        $aaa++;
    }
}

for ($i=0; $i <6 ; $i++) {
    for ($j=0; $j <10 ; $j++) { 
        echo $array[$i][$j] . " ";
    } 
}