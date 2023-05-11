<?php 
function premier($Primary) {
    for ($i = 2;  $i < $Primary; $i++) {
        if ($Primary % $i == 0) { 
            return FALSE;
        }// Si nombre est pas divisable par lui même, je retourne false
    }
    return TRUE;
}
for ($i = 1; $i <= 1000; $i++) {  
   if(premier($i)) {
        echo  "<br>", $i; 
   }
}

?>