<?php
    include 'db_connect.php';

    if (empty($_POST['nom']))
    {
    header('Location: formation.php');
    exit; 
    }

    $nom =  $_POST['nom'];
    $prenom = $_POST['prenom'];
    $ville = $_POST['ville'];
    $email = $_POST['email'];
    $etablissement = $_POST['etablissement'];
    $villeEtab = $_POST['villeEtab'];
    $cursus = $_POST['cursus'];
    if(isset($_POST['inscrireEtat'])) { $inscrire = 1; }
    else { $inscrire = 0; }
    if(isset($_POST['inscrireAilleurs'])) { $ailleurs = 1; }
    else { $ailleurs = 0; }
    $formation = $_POST['formation'];
        
    $sql1 = "INSERT INTO visiteurs (nomV, prenomV, villeV, emailV, villedeEtablissementV, etablissementV, CursusV) VALUES ('$nom', 
    '$prenom','$ville','$email','$villeEtab','$etablissement','$cursus')"; // insère les données dans la table visiteur 
    $conn->query($sql1);


    $sql2 = "SELECT numV FROM visiteurs WHERE nomV='$nom' AND prenomV='$prenom'"; // selectionne le numéro du visiteur à partir de la table visiteur 
    $result2 = $conn->query($sql2);
    if($result2)
    {
        while ($row = $result2->fetch_assoc()){
            $numV = $row['numV'];
        }
    }
    else
    {
        $numV = 0;
    }

    $sql3 = "INSERT INTO visites (sigleF, numV, horairePassage, postuleV, ailleursV) VALUES ('$formation','$numV',CURTIME(),'$inscrire','$ailleurs')";
    $conn->query($sql3);
	
    // permet d'afficher les informations des champs sur une autre page une fois après avoir cliqué sur valider 
    echo "<h3>Merci d'avoir remplis le formulaire, vos informations ont bien été enregistré !.</h3>";
    echo "<h3>Le lycée des Métiers René Cassin vous souhaites une bonne visite! 😊</h3>";

    echo nl2br(
        str_pad("Prénom", 20, " ") . " : " . $nom . "\n\n" . 
        
        str_pad("Nom", 20, " ") . " : " . $prenom . "\n\n" .
        
        str_pad("Ville", 20, " ") . " : " . $ville . "\n\n" .
        
        str_pad("Email", 20, " ") . " : " . $email . "\n\n" .
        
        str_pad("Ville de établiseement", 20, " ") . " : " . $villeEtab . "\n\n" .
        
        str_pad("Etablissement", 20, " ") . " : " . $etablissement . "\n\n" .
        
        str_pad("Cursus", 20, " ") . " : " . $cursus . "\n\n"
    
    );
        mysqli_close($conn);
?>