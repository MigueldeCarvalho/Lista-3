<?php
    $notas = [
        $_GET['nota1'],
        $_GET['nota2'],
        $_GET['nota3'],
        $_GET['nota4']
    ];

    $media = 0;
    for ($i=0; $i < sizeof($notas); $i++) { 
        $media += $notas[$i];
    }

    $media /= sizeof($notas);
    $situacao = $media > 7 ? 'aprovado' : 'reprovado';

    echo "Média do aluno: $media <br>";
    echo "Situação: $situacao <br>";
?>

<br>
<a href='ex6.html'>Voltar pro calcular</a>