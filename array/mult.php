<div class="titulo">Multidimensionais</div>

<?php
$dados = [
    [
        "nome" => "Roberto",
        "idade" => 26,
        "naturalidade" => "São Paulo"
    ],
    [
        "nome" => "Maria",
        "idade" => 25,
        "naturalidade" => "Bahia"
    ],
];

print_r($dados);
echo '<br>' . $dados[0]['idade'];
echo '<br>' . $dados[1]['idade'];

$dados[] = [
    "nome" => "Mychel",
    "idade" => 22,
    "naturalidade" => "Cajari"
];
echo '<br>';
print_r($dados);
echo '<br>' . $dados[2]['idade'];
$dados[2]["cor"] = "Branco";
echo '<br>';
print_r($dados[2]);
echo '<br>';

unset($dados[1]);
print_r($dados);
echo '<br>';
var_dump($dados[1]);