<?php
$p=strtoupper($_GET["p"]);
$n=100;
$auxmin=0;
$auxmax=0;
for ($i=0; $i < $n ; $i++) {
    $array[$i]=rand(0, 500);
    echo $array[$i] . "  ";
}

echo "<br>"."<br>";

$max=max($array);
$min=min($array);

for ($i=0; $i < $n; $i++) {
    if ($array[$i]==$max) {
        $auxmax=$i;
    }
    if ($array[$i]==$min) {
        $auxmin=$i;
    } 
    
}
echo "<br>"."<br>";
if ($p=="MAXIMO" || $p=="MÁXIMO") {
    $array[$auxmax]="*". $max ."*";
    for ($i=0; $i < $n ; $i++) { 
        echo $array[$i] . "  ";
    }
}

else if ($p=="MINIMO" || $p=="MÍNIMO") {
    $array[$auxmin]="*". $min ."*";
    for ($i=0; $i < $n ; $i++) { 
        echo $array[$i] . "  ";
    }
}

else {
    echo "Por favor escriba un argumento valido de busqueda (mínimo o máximo)";
}
?>