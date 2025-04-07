<div class="titulo">Desafio String</div>

<?php
// Enunciado:
// Avaliando os métodos da documentação da string,
// qual o métodos que a posição do texto 'abc'
// na string '!AbcAbcabc' retorna 1?

strpos('!AbcAbcabc', 'abc') . '<br>';
stripos('!AbcAbcabc', 'abc') . '<br>';

echo strpos(strtolower('!AbcAbcabc'), 'abc') . '<br>';