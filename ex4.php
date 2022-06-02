<?php
$Veiculo = $_POST['Veiculo'];
echo "Nome do veiculo informado: $Veiculo";
echo "<br/>";

$Modelo = $_POST['Modelo'];
echo "Modelo de carro informado = $Modelo";
echo "<br/>";

$Valor = (int) $_POST['Valor'];
echo "Valor do carro informado = $Valor";
$um = $Valor/100;
$ipi =  $um*9;
echo "<br/>";
echo "Valor da taxa de ipi é: $ipi";
$icms = $um*17;
echo "<br/>";
echo "Valor da taxa de icms é: $icms";
echo "<br/>";
?>


<a href="ex4.html">Voltar ao calcular</a>