<?php
$n = $_GET["n"];
if ($n<30) {
    for ($i=0; $i <$n ; $i++) { 
        $UNO[$i]=rand(-100, 100);
        $DOS[$i]=rand(-100, 100);
    }
    echo "UNO" . "<br>";
    for ($i=0; $i <$n ; $i++) { 
        echo $UNO[$i];
        echo "<br>" . "<br>";
    }
    echo "DOS" . "<br>";
    for ($i=0; $i < $n; $i++) { 
        echo $DOS[$i];
        echo "<br>"."<br>";
    }
    
    for ($i=0; $i < $n; $i++) { 
        $TRES[$i]=$UNO[$i];
    }

    for ($i=1; $i < $n; $i=$i+2) { 
        $TRES[$i]=$DOS[$i];
    }
    echo "TRES: " . "<br>";

    for ($i=0; $i < $n; $i++) { 
       echo $TRES[$i] . "<br>" . "<br>";
    }

}
else {
    echo "ingrese un numero menor a 30";
}
