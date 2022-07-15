<?php
//Ramiro Trujillo 43491882 ramiro_trujillo1@hotmail.com
//Me gustó resolver el parcial, pero bastaaaaante aspero, un saludo profe.
function generaArrayBiInt($a,$b,$n1,$n2){
    $array=[];
    for ($i=0; $i <$a ; $i++) {
        for ($j=0; $j < $b ; $j++) {
            $array[$i][$j]=rand($n1,$n2); 
            
        }
    }
    return $array;
}


function filaDeArrayBiInt($fila,$array){
    $aux=0;
    for ($i=0; $i < count($array[0]); $i++) { 
        $arreglo[$aux]=$array[$fila][$i];
        $aux++;

        
    }
    return $arreglo;

}



function columnaDeArrayBiInt($columna, $array){
    $aux=0;
    for ($j=0; $j < count($array[0]) ; $j++) { 
        $arreglo[$aux]=$array[$j][$columna];
        $aux++;

    }
    return $arreglo;
}


function coordenadasEnArrayBiInt($e,$array){
    $aux=0;
    for ($i=0; $i < count($array) ; $i++) {
        for ($j=0; $j < count($array[0]) ; $j++) { 
             if ($array[$i][$j]==$e) {
                $ubi[$aux]=[$i,$j];
                $aux++;

            }
        }

    }
    if ($aux==0) {
        $ubi[0][0]="no se encontró coincidencias";
    }
    return $ubi;
}

function diagonal($array){
    $aux=0;
    for ($i=0; $i < count($array[0]); $i++) { 
        $d1[$aux]=$array[$i][$i];
        $aux++;
    }
    $aux=0;
    for ($i=(count($array[0])-1); $i > -1 ; $i--) { 
        $d2[$aux]=$array[$aux][$i];
        $aux++;
    }
    $diagonales=[$d1,$d2];
    return $diagonales;

}

function esPuntoDeSilla($fila,$columna,$array){
    $contc=0;
    $contf=0;
    for ($i=0; $i < count($array) ; $i++) { 
        if ($array[$i][$columna]>$array[$fila][$columna]) {
            $contc++;
        
        }

    }
    for ($i=0; $i <(count($array[0])) ; $i++) { 
        if ($array[$fila][$i]<$array[$fila][$columna]) {
            $contf++;
        }
    }
    $var=0;
    if ($contc==0 && $contf==0) {
        $var="Es punto de silla";
    }
    else {
        $var="No es punto de silla";
    }
    return $var; 
}




    




