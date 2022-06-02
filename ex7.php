<?php
    $preco = (float)$_POST['prodPreco'];

    $pct = 1;
    $pct1 = $pct + 0.95;
    $pct2 = $pct + 0.87;
    $pct3 = $pct + 0.837;

    $precoAumentado = $preco;

    if ($preco <= 10)
        $precoAumentado *= $pct1;
    else if ($preco <= 50) 
        $precoAumentado *= $pct2;
    else
        $precoAumentado *= $pct3;
    
    echo "Preço original: $preco<br>";
    echo "Preço aumentado: $precoAumentado<br>";
?>

<a href="ex7.html">Voltar ao calcular</a>