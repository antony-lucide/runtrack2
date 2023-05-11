<?php 
for ($i = 0; $i <= 100; $i++) {
    if($i <= 20) {
        echo "<i>", $i, "</i>";
    }
    elseif(  $i >= 25 and $i <= 50) {
        echo "<u>", $i, "</u>";
    }
    elseif($i == 42) {
        echo "Laplateforme";
    }
    else {
        echo $i;
    } 
}
?>