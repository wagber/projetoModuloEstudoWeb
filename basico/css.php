<div class="titulo">Integração CSS</div>
<!--Código PHP dentro de uma tag h1-->

<!--center aqui é um seletor-->
<h1 center>
<?php
echo 'Olá' ;
echo '<small>';
echo 'Mundo!';
echo '</small>';
?>
</h1>
<!--Código HTML dentro de código PHP em uma unica linha-->
<?= "<div center azul>Outra forma de me 'expressar' !</div>" ?>

<br>
<!-- código PHP dentro de tags html para criar um botão -->
<div center><button dobro><?= "Legal" ?></button></div>

<!--o seletor button é um seletor de tag, de elemento e não precisando
marcar nada, uma vez que não é uma classe CSS.

=> para ser uma classe CSS: .button
"." = Identificador de 'classes' é usado quando vc quer que o mesmo
estilo se repita em outra parte do seu código. Você pode colocar vários
elementos com a mesma classe para todos terem o mesmo estilo.

=> para ser um Ids CSS: #button
"#" = Identificador de 'Ids' é usado quando vc quer que um estilo
se aplique somente naquele elemento e em nenhum outro.
Um identificador é único e não pode ter repetições
-->
<!--
padding: 5px 20px; é o mesmo que: padding: 5px <?= 2 * 10?> px;
pois foi adicionado código PHP para realizar o calculo aqui.
Ou seja, dentro de um aquivo CSS também é possível gerar códigos PHP.
-->
<style>
    button{
        padding: 5px <?= 2 * 10?> px;
        background-color: #4286f4;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }
    [center]{
        display: flex;
        justify-content: center;
    }

    [azul]{
        color: #4286f4;
    }

    [dobro]{
        font-size: <?= 10 - 8?>rem;
    }

</style>
<!--
Seletores usam [colchetes] e podem ser usados dentro de código CSS.
Ex.
[center]
[azul]
[dobro]

Usar seletor é o mesmo que dizer: qualquer elemento que tenha uma propriedade:
center, azul, dobro, etc.
-->
