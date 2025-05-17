<div class="titulo">Constantes</div>

<?php
const FRUTAS = array('Laranjas', 'Abacaxi');
// FRUTAS[0] = 'bananas';
// FRUTAS[] = 'bananas';
echo FRUTAS[0];

const CARROS = ["Fiat" => "Uno", "Ford" => "Fiesta"];
// CARROS["BMW"] = "325i";
echo '<br>' . CARROS["Fiat"];

define('CIDADES', array('Belo Horizonte', 'Recife'));
// CIDADES[] = 'Rio de Janeiro';
echo '<br>' . CIDADES[1];