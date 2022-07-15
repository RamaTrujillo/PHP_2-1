<?php 
for ($i=0; $i <6 ; $i++) { 
    for ($j=0; $j <4 ; $j++) { 
        $arrayA[$i][$j]=rand(1, 100);
        $arrayB[$i][$j]=rand(1, 100);
    }
}

for ($i=0; $i <6 ; $i++) { 
    for ($j=0; $j <4 ; $j++) { 
        echo "matriz A " . $arrayA[$i][$j] . "<br>";
        echo "matriz B " . $arrayB[$i][$j] . "<br>";
    }
}
$contmay=0;
$contmen=0;
$contigual=0;
for ($i=0; $i <6 ; $i++) { 
    for ($j=0; $j <4 ; $j++) {
        if ($arrayA[$i][$j]>=$arrayB[$i][$j]) {
            $contmay++;
            
        } 
        else if ($arrayA[$i][$j]<=$arrayB[$i][$j]) {
            $contmen++;
        }
        else{
            $contigual++;
        }   
        
    }
}

if ($contmay>$contmen) {
    echo "el arrayA es mayor al arrayB";

}
else {
    echo "<br>". "el arrayB es mayor al arrayA";
}