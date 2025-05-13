<div class="titulo">Array</div>

<?php
$lista = array(1, 2, 3.4, "texto");
echo $lisrta . '<br>';
var_dump($lista);
echo '<br>';
print_r($listal);

$lista[0] = 1234;

echo '<br>' . $lsita[0];
echo '<br>' . $lsita[1];
echo '<br>' . $lsita[2];
echo '<br>' . $lsita[3];
echo '<br>';
var_dump($lista[4]);

$texto = 'Esse é um texto de teste';
echo '<br>' . $texto[0];
echo '<br>' . $texto[2];
echo '<br>' . $texto[11]; // cuidado!
echo '<br>' . mb_substr($texto, 10, 1);