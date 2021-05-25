<?php
    function greater_number($a, $b, $c){
        if($a > $b and $a > $c){
            return $a;
        } elseif($b > $a and $b > $c){
            return $b;
        } else {
            return $c;
        }
    }

    echo greater_number(9, 6, 8);
?>