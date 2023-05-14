<form action="" method= "post">
    <label for="name">Nom:</label>
    <input type="text" id="name" name="username">
    <button type="submit"> Envoyer le message </button>
</form>


<?php 
    foreach ($_POST as $argument) {
        echo $argument;
    }
?>