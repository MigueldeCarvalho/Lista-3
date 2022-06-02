<?php
    // taxa de juros
    $taxa = 9.48;

    $montante = $_GET['valorMontante'];
    $anos = $_GET['anos'];

    $montante *= $taxa * $anos;
    $cadaParcela = $montante / ($anos * 12);

    echo "Montante: $montante <br>";
    echo "Valor de cada parcela: $cadaParcela <br><br>";
    echo "Taxa: $taxa <br>";
    echo "Tempo: $anos anos <br>";
?>

<a href="ex5.html">Voltar ao calcular</a>