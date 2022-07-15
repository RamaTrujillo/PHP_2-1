<?php
$palabra= $_GET["p"];
echo $palabra;
echo "<br>";
$cona=0;
$cone=0;
$coni=0;
$cono=0;
$conu=0;


$cona=substr_count($palabra, "A");
$cone=substr_count($palabra, "E");
$coni=substr_count($palabra, "I");
$cono=substr_count($palabra, "O");
$conu=substr_count($palabra, "U");

echo "A aparece " . $cona . " veces";
echo "<br>";
echo "E aparece " . $cone . " veces";
echo "<br>";
echo "I aparece " . $coni . " veces";
echo "<br>";
echo "O aparece " . $cono . " veces";
echo "<br>";
echo "U aparece " . $conu . " veces";