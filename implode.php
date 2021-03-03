<?php
    $names = array('Pina', 'Matheus', 'Messias', 'Luciano');
    echo implode(', ', $names);
    echo "<br><br>";

    // practical use example
    $name = "Pina";
    $email = "apina.dev@gmail.com";
    $message = "Cada vez melhor!";
    $telephone = "83999179439";

    $data = array(
        'name'      => $name,
        'email'     => $email,
        'message'   => $message,
        'telephone' => $telephone
    );

    $fields_sql = '`' . implode('`, `', array_keys($data)) . '`';
    $values_sql = "'" . implode("', '", $data) . "'";
    
    $sql = "
        INSERT INTO `table` ($fields_sql)
        VALUES ($values_sql)
    ";
    die($sql);
?>