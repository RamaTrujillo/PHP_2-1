<?php
$caracteres = array(0, -2, 4, 7, "a", "j", "$", "*", 8, "B", "S", "&", 1, -5, "f", "M", "?", "/", 6, "Z");


function evaluar ($array){
    for ($i=0; $i <= count($array)-1 ; $i++) { 
        if (is_string($array[$i])) {
            if (is_string($array[$i])) {
                $juanito[$i]=letra($array[$i]);
            }
        }
        else if (is_numeric($array[$i])) {
            $juanito[$i]="es un numero " . numero($array[$i]) . par($array[$i]);
        
        }    
                
    
        

    }
        

    return $juanito;
}



function numero($n){
    if ($n>0) {
        $var="positivo ";
    }
    elseif ($n==0) {
        $var="ni positivo ni negativo ";
    }
    else {
        $var="negativo ";
    }
    return $var;
}

function par($n){
    if ($n%2==0) {
        $p="par ";
    }
    else {
        $p="impar ";
    }
    return $p;
}
function letra($l){
    $ana=0;
    $aux=0;
    for ($i="a"; $i <= "z" ; $i++) { 
        $letras[$aux]=$i;
        $aux++;
    }
    $aux=0;
    for ($i="A"; $i <= "Z" ; $i++) { 
        $letrasm[$aux]=$i;
        $aux++;
    }
    $vocales=["a","e","i","o","u"];
    $vocalesm=["A","E","I","O","U"];
    if (in_array($l, $letras)){
        if (in_array($l, $vocales)){
            $ana=" es una vocal minuscula ";
        }
        else {
            $ana= " es una consonante minuscula ";
        }
    }
    else if (in_array($l, $letrasm)) {
        if (in_array($l, $vocalesm)) {
            $ana= "es una vocal mayuscula";
        }
        else {
            $ana= "es una consonante mayuscula";
        }
    }
    else {
        $ana="es un caracter especial ";
    }
    return $ana;
  
}

$pepe=evaluar($caracteres);

for ($i=0; $i < count($pepe) ; $i++) { 
    echo $pepe[$i] . "<br>";
}