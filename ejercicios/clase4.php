<?php

// Bloques

// Condicionales
if (true) {
    # code...
} elseif (false) {
    # code...
} else {
    # code...
}

// Valores espceíficos
switch ($variable) {
    case 'value':
        # code...
        break;
    case 'value':
        # code...
        break;

    default:
        # code...
        break;
}

// Consulta, usuarios
foreach ($datos as $id => $name) {
    # code...
}

foreach ($datos as $row) {
    # code...
}

$a = 1;
while ($a <= 10) {
    # code...
    $a++;
}

$a = 1000;
do {
    # code...
} while ($a <= 10);

for ($i=0; $i < 10; $i++) { 
    # code...
}