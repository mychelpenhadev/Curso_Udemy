<div class="titulo">Operadores Relacionais</div>
<!---->
<?php
//var_dump(1 == 1); // true
//var_dump(2 > 2); // false
//var_dump(3 >= 3); // true
//var_dump(4 < 23); // true
//var_dump(5 <= 5); // true
//var_dump(6 != 7); // false
//var_dump(7 <> 8); // false
//
//var_dump(1 == '1'); // true
//var_dump(1 === '1'); // false
//var_dump(1 != '1'); // true
//var_dump(1 !== '1'); // false

echo '<p class="divisao">Relacionais no if/else</p><hr>';
$idade = 25;
if ($idade < 18) {
    echo "Menor de idade = $idade anos<br>";
} elseif ($idade < 65) {
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos!<br>";
}

echo '<p class="divisao">Spaceship</p><hr>';
var_dump(500 <=> 3);
var_dump(50 <=> 50);
var_dump(5 <=> 50);

echo '<p class="divisao">Valores podem ser V ou F</p><hr>';
var_dump(!!5);
var_dump(!!0);
var_dump(!!"");
var_dump(!!" ");
