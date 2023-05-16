<?php 
    if(isset($_COOKIE["nbvisites"])) {
        setcookie('nbvisites',0,time()+60*60*24); 
    }

    setcookie('nbvisites',$_COOKIE["nbvisites"]+1,time()+60*60*24);
    echo $_COOKIE["nbvisites"];

    function stop(){
        setcookie('nbvisites',0,time()+60*60*24); 
    }
    
    if(isset($_POST ["boutton"])) {
        stop();
    
}
?>

<form method="post">
    <input type="submit" name="boutton" value="reset">
</form>