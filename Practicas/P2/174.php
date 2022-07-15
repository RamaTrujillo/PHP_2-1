<?php
for ($i=1; $i < 31 ; $i++) { 
    $notas[$i]=rand(0, 10);
}
$promedio=0 ;
for ($i=1; $i < 31 ; $i++){ 
    $promedio+=$notas[$i];
}
$promedio=round($promedio/$i-1, 2);
$cont=0;
for ($i=1; $i < 31; $i++) { 
    if ($notas[$i]>=$promedio) {
        $cont++;
    }
}
echo "la cantidad de alumnos que superaron el promedio es " . $cont;