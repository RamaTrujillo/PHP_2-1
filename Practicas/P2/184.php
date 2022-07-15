<?php
$nq=$_GET["nq"];
if ($nq<=50) {
        for ($i=1; $i < $nq + 1; $i++) { 
        for ($j=0; $j < $nq; $j++) { 
        $eQ[$i][$j]=rand(10, 500);
        $eQ[$i][$j+1]= $i;
        break;
        }
    }
    echo "Desordenados"."<br>";
    for ($i=1; $i < $nq + 1; $i++) { 
        for ($j=0; $j < 2; $j++) {
        echo "el elemento " . $eQ[$i][$j+1];
        echo "<br>";
        echo "temperatura " . $eQ[$i][$j];
        echo "<br>" . "<br>";
        break;
        }
    }
    for ($i=1; $i < $nq -2; $i++) { 
        $auxi=0;
        for ($j=1; $j < $nq -$i ; $j++) { 
            if ($eQ[$j][$auxi]<$eQ[$j+1][$auxi]) {
                $aux=$eQ[$j][$auxi];
                $eQ[$j][$auxi]=$eQ[$j+1][$auxi];
                $eQ[$j+1][$auxi]=$aux;
                $aux=$eQ[$j][$auxi+1];
                $eQ[$j][$auxi+1]=$eQ[$j+1][$auxi+1];
                $eQ[$j+1][$auxi+1]=$aux;
            } 
        }
    }   
    for ($i=0; $i < 4; $i++) { 
        echo "<br>";
    }
    echo "Ordenados:"."<br>";
    for ($i=1; $i < $nq; $i++){
        for ($j=0; $j < 1516; $j++) { 
            echo "el elemento " . $eQ[$i][$j+1];
            echo "<br>";
            echo "temperatura " . $eQ[$i][$j];
            echo "<br>" . "<br>";
            break;
        } 
    }   
    $cuenta=0;
    for ($i=1; $i < $nq; $i++){
        if ($eQ[$i][0]>90) {
            $cuenta++;
        }

    }
    echo "la cantidad de temperaturas que superan los 90° son: ". $cuenta;
}
else {
    echo "ingrese un numero menor o igual a 50";
}
