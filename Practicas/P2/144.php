<?php
$fac=$_GET["fac"];
$cont=1;
for ($i=0; $i < $fac; $i++) {
    $cont+=$cont*$i;
    
}
echo $cont;