<?php
//PRIMER EJERCICIO
echo "PRIMER EJERCICIO<br><br>";
$arreglo = [

	'keyStr1' => 'lado',
	0 => 'ledo',

	'keyStr2' => 'lido',
	1 => 'lodo',
	2 => 'ludo'

];

foreach ($arreglo as $key => $value) {
	
	echo "$arreglo[$key], ";
}

echo "<br>decirlo al revés lo dudo.<br>";

foreach (array_reverse($arreglo) as $key => $value) { 
	echo "$value, ";
}

echo "<br>¡Qué trabajo me ha costado! <br>";

//SEGUNDO EJERCICIO

echo "<br>SEGUNDO EJERCICIO<br>";

$paises = ["colombia"=>['cartagena','cali','bogota'], "venezuela"=>["caracas", "sancristobal", "maracay"], "México"=> ["Monterrey" ,"Querétaro", "Guadalajara"],"EEUU"=> ["new york" ,"california", "texas"],"españa"=> ["madrid" ,"valencia", "cataluña"]];
$i=1;
foreach ($paises as $key => $value) {
	
	echo "<br>$i.$key= ";
	$i++;
	foreach ($value as $ciudad) {
		echo "$ciudad, ";
	}
	
}
//TERCER EJERCICIO
echo "<br><br>TERCER EJERCICIO<br>";

$valores = [23, 54, 32, 67, 34, 78, 98, 56, 21, 34, 57, 92, 12, 5, 61];

for($i=0;$i<count($valores);$i++)//uso un for para leer desde la primera posicion hasta la ultima
	{
		for($j=$i+1;$j<count($valores);$j++){//un segundo for para leer desde la siguiente posicion
			if($valores[$i]<$valores[$j]){//si el primer valor es menor al siguiente
				$temporal=$valores[$j];//guardo temporalmente el valor de la posicion siguiente
				$valores[$j]=$valores[$i];//asigno el valor de la siguiente posicion con el valor de la primera posicion
				$valores[$i]=$temporal;//y a la primera posicion uso el valor temporal que cree, para guardar el valor de la siguiente posicion
			}//notese que cambiamos el valor de las posiciones en las iteraciones
		}
	}

echo "<br>";
echo "Array ordenado de forma descendente sin funciones nativas de php: ".implode(", ",$valores);
echo "<br><br>Los 3 numeros de mayor valor: $valores[0],$valores[1],$valores[2]<br>";
echo "<br>Los 3 numeros de menor valor: $valores[12],$valores[13],$valores[14]<br>";
?>
