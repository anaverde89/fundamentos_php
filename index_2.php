<?php

//Asignación 
$num = 9;
$lang = [
    'es' => 'español',
    'en' => 'ingles'
];

//Aritmética
echo "Suma 2 + 2 " . ((int)2 + (int)2);
echo "Resta 2 - 2 " . ((int)2 - (int)2);
echo "Multiplica 2 * 2 " . (2 * 2);
echo "Divide 2 / 2" . (2 / 2);
echo "Modulo 2 % 2" . (2 % 2);
echo "Exponencial 2 ** 2" . (2 ** 2);

// Comparación
//Igual ==, valor '9' == 9
//Igual ===, valor tipo 9 === 9
//Diferencias !=, valor
//Diferencias !==, valor - tipo
//<, >, <= , >=

//Variables variables
$app = 'name';
$name = 'platzi';
echo $app; //name
echo $$app; //platzi
