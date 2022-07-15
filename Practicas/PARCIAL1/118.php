<?php 
$cuadrado=[];
for ($i=0; $i <12 ; $i++) { 
    for ($j=0; $j <12 ; $j++) { 
        $cuadrado[$i][$j]=rand(0,100);
        echo $cuadrado[$i][$j] . " ";
    }
    echo "<br>";
}

echo "................................................................". "<br>";

for ($i=0; $i <12 ; $i++) {
    $aux=0;
    for ($j=0; $j <12 ; $j++) { 
    $auxi=$cuadrado[$i][$aux];
    $cuadrado[$i][$j]=$cuadrado[$i][$j];
    $cuadrado[$i][$j]=$auxi;
    echo $cuadrado[$i][$j] . " ";
    $aux++;
    

    }
    echo "<br>"; 
}

