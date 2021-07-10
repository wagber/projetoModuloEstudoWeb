<div class="titulo">Float</div>

<?php
echo 1.1, '<br>'; //valores literais

var_dump(1.1);
echo '<br>';

var_dump(1.0);
echo '<div>Ainda que o float seja 1 mas foi passado o valor de 1.0</div>';
echo '<br>';

echo PHP_FLOAT_MAX, '<br>'; //contantes
echo PHP_FLOAT_MIN, '<br>'; //contantes
//Notação e, E -> tanto faz minúsculo ou maiúsculo
echo 1.2e3, '<br>';  //é o mesmo que => 1.2 x 10 elevado a 3. -> 1200
echo 13E-3, '<br>';  //é o mesmo que => 13 x 10 elevado a -3. -> 0.013
