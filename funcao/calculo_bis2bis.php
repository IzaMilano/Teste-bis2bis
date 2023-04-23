
<?php
function Jogo($resultado)
{

    $pontuacao = explode(':', $resultado);
    $total_pontuacao = array_sum($pontuacao);
    $soma = $total_pontuacao / 5;
    $numerointeiro = intval($soma);
    $res = ($numerointeiro % 2 == 0) ? 'Jogador A' : 'Jogador B';
    $sub = abs($pontuacao[0] - $pontuacao[1]);
    

    if ($pontuacao[0] >= 21 && $sub >= 2 || $pontuacao[1] >= 21 && $sub >=2)
    {
        return '<h4>JOGO ENCERRADO !</h4>';

    } 

    else if ($pontuacao[0] >= 20 && $pontuacao[1] >= 20) 
    {
        $soma1 = $total_pontuacao / 2;
        $num_inteiro = intval($soma1);
        $res2 = ($num_inteiro % 2 == 0) ? 'Jogador A' : 'Jogador B';
        return '<h4>Jogador da vez:</h4>' . ' ' . $res2;
    }

    return '<h4>Jogador da vez:</h4>' . ' ' .  $res;
}

?>