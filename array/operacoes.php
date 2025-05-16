<div class="titulo">Operações</div>

<?php
$dados1 = [
    "nome =" => "Jose",
    "idade" => 28
];

$dados2 = [
    "naturalidade" => "Fortaleza"
];

$dadosCompletos = $dados1 + $dados2;
print_r($dadosCompletos);