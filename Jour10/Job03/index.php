
<?php
    $db = new PDO('mysql:host=localhost; dbname=Jour09;charset=utf8','root','');
    $requete = $bdd->prepare('SELECT nom FROM etudianqt WHERE sexe=Femme');
    $requete->execute();
    $user = $requete->fetch();
?>

<table method="post">
    <thead> 
  <tr>
    <td>Nom</td>
    <td>Capacite</td>
  </tr>
  <tbody>
    <tr> 
        <td>$user[nom]</td>
    </tr>
  </tbody>
</table>

