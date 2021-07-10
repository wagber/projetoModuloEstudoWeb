<div class="titulo">Integração HTML</div>
<!--Código PHP dentro de uma tag h1-->
<h1>
<?php
echo 'Olá' ;
echo '<small';
echo 'Mundo!';
echo '</small>';
?>
</h1>
<!--Código HTML dentro de código PHP em uma unica linha-->
<?= "<div>Outra forma de me 'expressar' !</div>" ?>

<br>
<!-- código PHP dentro de tags html para criar um botão -->
<div><button><?= "Legal" ?></button></div>
