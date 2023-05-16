<?php
session_start();

    if(!isset($_SESSION ["prenoms"])) {
        $_SESSION["prenoms"] = [];
    }

    if(isset($_POST ["envoyer"])) {
        $prenom = $_POST["prenom"];
        array_push($_SESSION["prenoms"], $prenom);
    }
    
    foreach ($_SESSION["prenoms"] as $key) {
        echo $key;
    }
?>




<form action="" method= "post">
    <label for="prenom">Prénom</label>
    <input type="text" name="prenom">
    <button type="submit" name="envoyer" > Envoyer le message </button>
</form>