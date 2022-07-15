<?php
//I = P * A + V + D3/5 + C
$array=[];
$aux=1;
for ($i=2; $i <= 24; $i+=2) { 
    $array[$aux]=$i;
    $aux++;
}
define("M", 4);
function calA($array, $M){
    $total=0;
    for ($i=1; $i <=12 ; $i++) { 
        $array[$i]=($array[$i]-$M);
        
    }
    for ($i=1; $i <=12 ; $i++) { 
        $total+=$array[$i];

    }
    return $total;

}

define("P", 50);
define("V", 40);
define("D", 80);
define("C", 10);

function calI($array ,$a,$b,$c,$d){
    $I=$a*calA($array,M)+$b+pow($c,(3/5))+$d;

    $I=round($I,2);

    return $I;

}

echo $socotroco=calI($array,P,V,D,C);



