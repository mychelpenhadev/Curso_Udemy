<div class="titulo">Desafio For</div>

<!--
Usar o for...
#
##
###
####
#####
1) Pode usar incremento $i++
2) Nao pode usar incremento $i++
-->

<?php  
$impressao = '';
for($cont = 1; $cont <= 5; $cont++) {
    $impressao .= '#';
    echo "$impressao <br>";
}

echo '<br>';

for(
    $impressao2 = '#';
    $impressao2 !== '######';
    $impressao2 .= '#' ) {
        echo "$impressao2 <br>";
    }