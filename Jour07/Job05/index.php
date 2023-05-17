<?php 
    function occurences($str,$char) {
        $var = 0;
        for($i = 0; ; $i++) {
            if (isset($str[$i]) == FALSE) {
                break;
            }
            if ($char == $str[$i]) {
                $var++;
            }
        }
        return $var;
    } 
echo occurences("Bonjour", "o");
?>