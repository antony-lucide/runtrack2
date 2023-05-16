<?php 
session_start();

$_SESSION["nbvisites"]+=1;

echo $_SESSION["nbvisites"];


function stop() {
    $_SESSION["nbvisites"]=0;
}

    if(isset($_POST['boutton'])) {
        stop();
    }
?>



<form method="post">
    <input type="submit" name="boutton" value="reset">
</form>