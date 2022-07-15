<?php
$kw=$_GET["kw"];
echo "su consumo fue " . $kw . " kw ";
if ($kw>=0){
    if ($kw<=200) {
        $total=$kw*0.05;
        echo "gastó ".$total . " pesos";
    }
    else if ($kw>200 && $kw<1000) {
        $total=$kw*0.1;
        echo "gastó ". $total . " pesos";
    
    }
    else if ($kw>=1000){
        $total=$kw*0.15;
        echo "gastó ". $total . " pesos";
    }
}
else {
    echo " PONÉ BIEN EL IMPORTE";
}













?>


