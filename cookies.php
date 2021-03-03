<?php
    $exp = time() + 86400;
    $exp_unset = $exp - 86400;

    // set cookie
    // setcookie("name", "Pina", $exp);

    // unset cookie
    // setcookie("name", "", $exp_unset);
    
    echo $_COOKIE['name'];
?>