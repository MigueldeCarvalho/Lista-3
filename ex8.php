<?php
    $fruta = $_GET['selectFruta'];

    switch ($fruta) {
        case 'laranja': 
        case 'limão': 
        case 'abacaxi': 
        case 'uva': 
        case 'maracujá': 
        case 'manga':
            echo "A fruta $fruta é boa para fazer suco";
            break;
            
        case 'banana': 
        case 'mamão': 
        case 'melão': 
        case 'pêssego': 
        case 'abacate':
            echo "A fruta $fruta é boa para fazer vitamina";
            break;        
            
        default:
            echo "erro";
            break;
    }
?>
<br>
<a href="ex8.html">Voltar ao enviar</a>