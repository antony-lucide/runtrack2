<form action="" method= "get">
    <label for="name">Nom:</label>
    <input type="text" id="name" name="username">
    <button type="submit"> Envoyer le message </button>
</form>

<?php 
    foreach ($_GET as $argument) {
        echo $argument;
    }
?>