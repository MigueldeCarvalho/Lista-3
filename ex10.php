<?php
    $a = $_GET['p'];
    $w = $_GET['peso'];

    // count SobrePeso
    $countSP = 0;
    for ($i=0; $i < sizeof($a); $i++) { 
        if ($a[$i] == NULL) 
            continue;
        
        if ($w[$i] == NULL)
            continue;
        
        if ($w[$i] >= 90)
            $countSP++;

        $numPessoa = $i + 1;
        $estat = '';
        if ($a[$i] <= 160)
            $estat = 'baixa';
        elseif ($a[$i] <= 185)
            $estat = 'media';
        else
            $estat = 'alta';

        echo "Pessoa $numPessoa: $estat <br>";
    }

    echo "<br>Número de sobrepesos: $countSP"
?>

<a href="ex10.html">Voltar ao enviar</a>