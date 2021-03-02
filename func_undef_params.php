<?php
    function add() {
        $total = 0;
        if(sizeof(func_get_args()) > 0) {
            foreach(func_get_args() as $arg) {
                $total += (int)$arg;
            }
        }
        return $total;
    }

    function append($initial) { 
        $result = func_get_arg(0);
        foreach(func_get_args() as $key => $value) {
            if($key >= 1) {
                $result .= ' ' . $value;
            }
        }
        return $result;
    }

    echo add(5, 10);
    echo append('Alex', 'Garrett');
?>