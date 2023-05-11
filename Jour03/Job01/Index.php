<?php  
$list = [204,200,173,98,171,404,459];

foreach ($list as $key) {
    if($key % 2 == 0) {
        echo "<br>", $key .  "est pair";
    }
    else {
        echo "<br>", $key . "Est Impair";
    }
}
?>