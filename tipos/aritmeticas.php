<div class="titulo">Operações Aritméticas</div>

<?php
echo 1 + 1, '<br>';
var_dump(1 + 1.0);
echo '<br>';
echo 1 + 2.5, '<br>';
echo 10 - 2, '<br>';
echo 2 * 5, '<br>';
echo 7 / 4, '<br>';
echo intdiv(7, 4), '<br>'; /*a função intdiv retorna um resultado
truncado, ou seja, tira as casas decimais e retorna um ineiro.*/
echo round(7 / 4), '<br>'; /*a função round faz o arredondamento para
o número mais próximo do inteiro */
echo 7 % 4, '<br>';
echo 7 % 2, '<br>'; /*forma de descobrir número par -> se o resto
for igual a 0 é par, se o resto for igual a 1 é impar. */
echo 8 % 2, '<br>';
echo 7 / 0.0000000001, '<br>'; // 70 bilhões
echo 7 / 0, '<br>'; //INF = Infinito
// echo intdiv(7 , 0); #erro! -> Qualquer código após esse não faz com que a pagina não seja renderizada.
echo 4 ** 2, '<br>'; //exponenciação
