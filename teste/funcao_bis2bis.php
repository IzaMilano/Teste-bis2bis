<?php
require_once 'funcao/calculo_bis2bis.php';

if (isset($_POST['btn_iniciar'])) 
{

    $jogador1 = ($_POST['jogador1']);
    $jogador2 = ($_POST['jogador2']);


    $resultado = "$jogador1:$jogador2";

    $funcao = Jogo($resultado);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="funcao_bis2bis.php" method="post">

        <h1>Pontuação Atual</h1>
        <label>Jogador 1</label><br>
        <input type="number" name="jogador1" value="<?= isset($jogador1) ? $jogador1 : '' ?>"><br>
        <label>Jogador 2</label><br>
        <input type="number" name="jogador2" value="<?= isset($jogador2) ? $jogador2 : '' ?>">
        <p>
            <button name="btn_iniciar">Iniciar</button>
        <p>

            <?php if (isset($funcao)) 
            {
                echo $funcao;
                
            } ?>
    </form>
</body>

</html>