<!-- permet de récupérer les formations pour les mettres dans un menu dérroulant  -->
<?php
include 'db_connect.php'; // connexion à la base de donnée

$sql = "SELECT sigleF, intituleF FROM formations"; // on selectionne le sigle + intitulé + salle de la table formation 
$result = $conn->query($sql); // on execute la requête, le résulat est stocké dans la variable $result 

if ($result->num_rows > 0) {
    echo '<select id="formation" name="valeur">'; // créé pour représenter le menu déroulant.

    while ($row = $result->fetch_assoc()) {
        echo '<option value="' . htmlspecialchars($row['sigleF']) . '">' . $row['intituleF'] . '</option>' . "\n";
        //La boucle while parcourt chaque ligne du $result (chaque formation). Pour chaque ligne, une option option est créée dans l'élément select.
    }

    echo '</select>'; 
}
?>