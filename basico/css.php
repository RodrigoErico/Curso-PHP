<div class="titulo">Integração CSS</div>

<?= "<div center blue> Exemplo de texto 'comum' !</div>" ?>

<br>
<div center ><button double><?= "Legal" ?></button></div>

<style>
    button {
        padding: 5px <?= 2 * 10 ?>px;
        background-color: #1867c0;
        color: #EEE;
        font-weight: bold;
        border-radius: 10px;
    }

    [center] {
        display: flex;
        justify-content: center;
    }

    [blue] {
        color: #4286f4;
    }

    [double] {
        font-size: 2rem;
    }
</style>