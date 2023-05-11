<?php  
$str = "I'm sorry Dave I'm afraid I can't do that.";
$list = ["a", "e","y","i","l","o"];


for ($i = 0; ; $i++) {
    if  (isset($str[$i]) == FALSE ){
    break;
    }
    if (liste($str[$i], $list)) {
        echo $str[$i];
    }
}

function liste ($char, $voyelles){
    foreach ($voyelles as $voyelle) {
        if($char == $voyelle) {
            return TRUE;
        }
    }
    return FALSE;
}