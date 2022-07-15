<?php
$l= 5;
function DibujaL($l){
for ($i=1; $i<=$l-1 ; $i++) { 
    echo "*" . "<br>";
}
echo str_repeat("*  ", (round($l/2)+1));
}

dibujal($l);
//falta php

echo "A"=="a";