<?php
    function equals_one($val) {

        // No lugar de controlar o fluxo da função colocando returns
        // dentro de ifs ou, ainda, usando operadores ternarios,
        // é possível retornar diretamente o resultado da expressão
        return $val === 1;
    }

    var_dump(equals_one(2));
?>