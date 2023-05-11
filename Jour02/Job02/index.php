<?php 
for ($i = 0; $i <= 1337; $i++) {
    if($i == 26) {
        continue;
    }
    elseif ($i == 37) {
        continue;
    }
    elseif ($i == 88) {
        continue;
    }
    elseif ($i == 1111) {
        continue;
    }
    elseif ($i == 3233) {
        continue;
    }
    else {
        echo $i;
        echo "<br>";
    }
}
?>