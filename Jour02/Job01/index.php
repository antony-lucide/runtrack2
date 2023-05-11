<?php 
for ($i = 0; $i <= 1337; $i++) {
    if($i == 47) {
        echo "<b>", "<u>", $i, "</u>", "</b>";
    }
    else {
        echo $i;
        echo "<br>";
    }
}
?>