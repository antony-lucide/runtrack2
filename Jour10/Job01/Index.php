<?php
    $db = new PDO('mysql:host=localhost; dbname=Jour09;charset=utf8','root','');
    $requete = $bdd->prepare('SELECT * FROM salles');
    $requete->execute();
    $user = $requete->fetch();
?>


<table method="post">
  <tr>
    <td>Nom</td>
    <td>Capacite</td>
    <td>Nom</td>
  </tr>
  <tbody>
    <tr>
      <td>$user['nom','naissance','sexe',Prenom]</td>
    </tr>
  </tbody>
</table>