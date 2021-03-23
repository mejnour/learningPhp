<?php
    $string = "m0 z0v0  ";
    $string = trim($string);
    $keywords = preg_split('/[\s]+/', $string);

    print_r($keywords);
?>