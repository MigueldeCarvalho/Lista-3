<?php
    $raioEsfera = $_POST['raioEsf'];

    $volumeEsfera = round((4 * pi() * pow($raioEsfera, 3)/3), 2);
    echo "O volume da esfera é: $volumeEsfera";
?>

<a href="ex2.html">Voltar ao calcular</a>