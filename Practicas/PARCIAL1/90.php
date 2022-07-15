<?php
$b=$_GET["b"];
$e=$_GET["e"];
function potencia ($b, $e){
    $aux=1;
    $result=[];
    for ($i=1; $i <= $e+1; $i++) { 
        $aux=$b;
        $result[$i]=$aux;
    }
    return $result;
}
?>
<?php
$aux=potencia($b, $e);
for ($i=1; $i < $e+1; $i++) { 
    echo $aux[$i]; ?> <sup><?php echo $i?> </sup><?php

}
?>