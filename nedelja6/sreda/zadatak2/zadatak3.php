<?php
    function create_div_with_spans($n, $m){
        $result = "";
        for($i=1; $i<=$n; $i++){
            $result .= "<div>";
            for($j=1; $j<=$m; $j++){
                $result .= "<span>$j</span>";
            }
        $result .= "</div>";
        }
        return $result;
    }

    echo create_div_with_spans(9, 5);
?>