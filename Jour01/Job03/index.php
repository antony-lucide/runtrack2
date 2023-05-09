<?php $utilisateurs = array(
  array("type" => "Personne", "prenom" => "John", "Smith" => "Doe", "age" => 25),
  array("type" => "personne", "prenom" => "Jane", "Doe" => "Doe", "age" => 30),
  array("type" => "personne", "prenom" => "Bob", "Lenon" => "Smith", "age" => 45)
);


echo "<table>";
echo "<thead>";
echo "<tr>";
echo "<th>TYPE</th>";
echo "<th>NOM</th>";
echo "<th>AGE</th>";
echo "</tr>";

foreach ($utilisateurs as $key ) {
    echo "<tr>";
    echo "<td>" . $key["TYPE"] . "</td>";
    echo "<td>" . $key["NOM"] . "" . $key["prenom"] . "</td>";
    echo "<td>" . $key["AGE"] . "</td>";
    echo "</tr>";
}

echo "</table>";
?>


