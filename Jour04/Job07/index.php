<form action="" method= "get">
    <label for="name">Hauteur:</label>
    <label for="name">Largeur </labe>
    <input id="nombre" name="Hauteur">
    <input id="nombre" name="Largeur">
    <button type="submit"> Envoyer le message </button>
</form>


<?php
    for ($i = $_GET["Hauteur"]; ; $i+=2) {
        for ($x = $_GET["Largueur"]; ; $x+=2) {
            if ($i <= 10 and $x <= 5) {
                echo ":_" . "/" . "|";
            }
        }
    }

?>