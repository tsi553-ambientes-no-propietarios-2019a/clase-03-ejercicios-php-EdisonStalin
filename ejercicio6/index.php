
<?php

/**

Crear una función que determine si una palabra contiene las 5 vocales .sin repetir ninguna. Presentar un mensaje que indique si la palabra contiene las 5 vocales y cuantas letras tiene la palabra.

Ejemplos:
Murciélago
aceituno
acuífero
http://buscapalabras.com.ar/palabras-con-las-cinco-vocales.html
 */






function vocales($cadena){

	/*variables*/
	$ContGlobal =0;
	$ConA =0;
	$ConE =0;
	$ConI =0;
	$ConO =0;
	$ConU =0;

	$vocales = "aeiou";
	/*Contador de letras*/
	$letrasCadena = strlen ($cadena);
	/*Contador de letras*/
	$letrasvocales = strlen ($vocales);
	
	/*bucle*/

		for($a =0; $a<$letrasvocales; $a++){
			$ContGlobal=$vocales[$a];
			//echo $ContGlobal;

			for($b =0; $b<$letrasCadena; $b++){
				$ingreso = $cadena[$b];
				
				if($ingreso == $ContGlobal){
					if($ContGlobal == 'a' || $ContGlobal == 'A' || $ContGlobal == 'á'){
						
						$ConA++;
						
					}elseif ($ContGlobal == 'e'|| $ContGlobal == 'E' || $ContGlobal == 'é') {
						
						$ConE++;
						
					}elseif ($ContGlobal == 'i'|| $ContGlobal == 'I' || $ContGlobal == 'í') {
					
						$ConI++;
						
					}elseif ($ContGlobal == 'o'|| $ContGlobal == 'O' || $ContGlobal == 'ó') {
						
						$ConO++;
						
					}elseif ($ContGlobal == 'u'|| $ContGlobal == 'U' || $ContGlobal == 'ú') {
						
						$ConU++;
						
					}
				}
			}
			
		}


		echo "La vocal A =".$ConA."<br>";
		echo "La vocal E =".$ConE."<br>";
		echo "La vocal I =".$ConI."<br>";
		echo "La vocal O =".$ConO."<br>";
		echo "La vocal U =".$ConU."<br>";
		echo "-------------------------------<br>";
			if($ConA == 1 && $ConE ==1 && $ConI== 1 && $ConO ==1 && $ConU ==1 ){
				echo "La palabra que ingresaste contiene todas las vocales  <br>"."Felicitaciones!!!!!";

			}else{
				echo "La palabra que ingresaste NO!!! contiene todas las vocales ó hay vocales repetidas <br>"."<br>INTENTA CON OTRA PALABRA";

			}


}

//ingresar la palabra
$cadena = "aceituno";


//Imprimir
echo "El resultado es el siguiente :<br><br>";
echo "Palabra ingresada es: "."<b>".$cadena."</b>"."<br>";
echo vocales($cadena);



?>
