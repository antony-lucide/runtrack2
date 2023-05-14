<form action="" method= "get">
    <label for="name">Nom:</label>
    <input id="nombre" name="nombre">
    <input id="psswrd" name="password">
    <button type="submit"> Envoyer le message </button>
</form>

<?php
    if($_GET["nombre"] % 2 == 0) {
        echo "Nombre pair";
    }
    else {
        echo "Nombre impair";
    }
?>
 