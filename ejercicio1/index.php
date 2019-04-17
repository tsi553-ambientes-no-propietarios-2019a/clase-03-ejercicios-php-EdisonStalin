<?php
/**
 * Problema propuesto.
 * Mostrar la tabla de multiplicar del 2. Emplear el for, luego el while y por último el do/while.
 * La estructura for permite incrementar una variable de 2 en 2
 */

echo "uso del For ";
echo "<br>";
$Cont1 = 1;

for($a=2; $a<=20; $a=$a+2){
	echo $Cont1++.'x'.'2'.'='.$a;
	echo "<br>";
}

echo "<br>";

/* uso del while */
echo "uso del  While ";
echo "<br>";
$Cont2 = 1;
$b = 0;
while($b<=20){
	echo $Cont2++.'x'.'2'.'='.$b=$b+2;
	echo "<br>";
}

echo "<br>";
/* uso del Do While */
echo "uso del Do While ";
echo "<br>";

$Cont3 = 1;
$c = 0;
do{
	echo $Cont3++.'x'.'2'.'='.$c=$c+2;
	echo "<br>";
}while($c<=20);


?>