<?php

    function create_div_with_spans($n){
        $result = "";
        for($i=1; $i<=$n; $i++){
            $result .= "<span>$i</span>";
        }
        return "<div>$result</div>";
    }

    echo create_div_with_spans(7);
?>