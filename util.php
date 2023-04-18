<?php

//MANEJO DE FECHAS
ini_set('date.timezone','America/Lima');

$fecha_actual = date("Y-m-d"); //Fecha actual
echo $fecha_actual."<br>";

$dia_actual = date("w",strtotime($fecha_actual)); //Día actual
echo $dia_actual."<br>";

$nueva_fecha = strtotime('-1 day',strtotime($fecha_actual)); //Nueva fecha
$nueva_fecha = date('Y-m-d',$nueva_fecha );
echo $nueva_fecha."<br>";

//MANEJO DE STR
$numeros = "1416180
1416181
1416182
1416183
1416184
1416185
1416186
1416187
1416188
1416189
1416190
1416191
1416192
1416193
1416194
1416195
1416196";

$numeros = str_replace(PHP_EOL,'","',$numeros);
$numeros = '"'.$numeros.'"';
// $numeros = str_replace(PHP_EOL,',',$numeros);
// $numeros = $numeros;
echo $numeros;
