<form action="" method= "post">
    <label for="name">Nom:</label>
    <input id="name" name="username">
    <input id="psswrd" name="password">
    <button type="submit"> Envoyer le message </button>
</form>

<?php 
    if($_POST["username"]  == "John" and $_POST["password"] == "Rambo") {
        echo "C'est pas ma guerre";
}
?>