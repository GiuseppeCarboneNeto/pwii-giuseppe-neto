

<?php
   
    $distancia = isset($_POST['dist']) ? floatval($_POST['dist']) : null;
    
    $combustivel_percorrido = isset($_POST['combustivel_percorrido']) ? floatval($_POST['combustivel_percorrido']) : null;
    
    
        $consumo_medio = $combustivel_percorrido / $distancia;
        echo "<h1>Seu consumo médio de combustível é: " . number_format($consumo_medio, 2) . " litros por km.</h1>";
   
?>






