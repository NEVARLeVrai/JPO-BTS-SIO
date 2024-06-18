<?php
    include 'db_connect.php';

    if (empty($_POST['valeur'])) {
        header('Location: stat_formation.php');
        exit;
    }

    $formation = $_POST['valeur'];
    $mdp = $_POST['mdp'];
    $message = "Mot de passe incorrect !! 🤡";

    $sql = "SELECT mdpF FROM FORMATIONS WHERE sigleF='$formation'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $mdpF = $row['mdpF'];

        if ($mdpF != $mdp) {
            header("Location: stat_formation.php?message=$message");
            exit;
        }
    } else {
        header('Location: stat_formation.php');
        exit;
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="Statistique ADMIN">
    <meta property="og:title" content="&#x26CA; Statistique ADMIN">
    <meta property="og:description" content=" be careful where you step. it's still under construction!">
    <meta property="og:url" content="http://www.lyceecassin-strasbourg.eu/">
    <meta property="og:image:url" content="logo.png">
    <link rel="icon" href="logo2.png">
    <title>Statistique ADMIN</title>
    <link href="style3.css" rel="stylesheet">
</head>

<body>

    <header>
        <img style="float:right" src="logo.png" class="logo"> <!--logo-->
        <h2>Statistique :</h2>
        <h1><?php echo $formation; ?></h1>
    </header>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <table>
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Ville</th>
            <th>Email</th>
            <th>Établissement</th>
            <th>Ville Établissement</th>
            <th>Cursus</th>
            <th>Horaire de passage</th>
            <th>Va postuler ici</th>
            <th>Va postuler ailleurs</th>
        </tr>

        <?php
        $sql = "SELECT VISITEURS.nomV, VISITEURS.prenomV, VISITEURS.villeV, VISITEURS.emailV, VISITEURS.villedeEtablissementV,
        VISITEURS.etablissementV, VISITEURS.CursusV, VISITES.horairePassage, VISITES.postuleV, VISITES.ailleursV FROM VISITEURS, VISITES WHERE 
        VISITEURS.numV=VISITES.numV AND VISITES.sigleF='$formation';";
        $result = $conn->query($sql);
        $visiteurs = $result->num_rows;

        if ($visiteurs > 0) {
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>'.$row['nomV'].'</td><td>'.$row['prenomV'].'</td><td>'.$row['villeV'].'</td><td>'.$row['emailV'].
                '</td><td>'.$row['etablissementV'].'</td><td>'.$row['villedeEtablissementV'].'</td><td>'.$row['CursusV'].'</td><td>'.$row['horairePassage'].'</td><td>'.$row['postuleV'].
                '</td><td>'.$row['ailleursV'].'</td>';
                echo '</tr>';
            }
        }
        ?>

    </table>

    <br>
    <br>

    <?php
        echo "<p>Nombres de visiteurs de la formation $formation : $visiteurs<p><br>";
        $sql2 = "SELECT numV FROM VISITES WHERE sigleF='$formation' AND postuleV='1';";
        $result2 = $conn->query($sql2);
        $postule = $result2->num_rows;
        echo "<p>Nombres de visiteurs pensant postuler pour la formation $formation : $postule<p>";
    ?>
    
</body>
</html>