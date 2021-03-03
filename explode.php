<?php
    $likes = 'teste1, teste2, teste3, teste4, teste5';
    $likes = explode(', ', $likes);

    print_r($likes);

    foreach($likes as $key => $value) {
        echo '<br>';
        echo 'Chave ' . $key . ' Valor ' . $value;
    }
?>