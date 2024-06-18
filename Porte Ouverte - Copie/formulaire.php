<?php
include 'db_connect.php'; // connexion a la base de donnée 

if (empty($_POST['valeur'])) // vérifie si un élement nommé "valeur" à été soumis via la requête POST, si non if s'exécute 
 {
  header('Location: formation.php'); // si l'élement valeur est vide l'utilisateur est redirigée vers la page formation
  exit; 
 } 
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="Fiche de renseignements">
    <meta property="og:title" content="&#x26CA; Fiche de renseignements">
    <meta property="og:description" content=" be careful where you step. it's still under construction!">
    <meta property="og:url" content="http://www.lyceecassin-strasbourg.eu/">
    <meta property="og:image:url" content="logo.png">
    <link rel="icon" href="logo2.png">
    <title>Fiche de renseignements</title>
    <link href="style2.css" rel="stylesheet">

</head>

<body>

<!-- PERMET DE METTRE LE NOM DE LA FORMATION EN FONCTION DU CHOIX  -->
<?php
$formation = $_POST['valeur'];
//En fonction de la valeur de "sigleF" dans la sélection "valeur", il récupère des données d'une table FORMATIONS à l'aide d'une requête SQL.
?>     

<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<header>
    <img style="float:right" src="logo.png" class="logo"> <!--logo-->
    <h2>Fiche de Renseignements :</h2>
    <h1><?php echo $formation; ?></h1>
    <!-- Extrait les valeurs intituleF et numSalle des données récupérées et les afficher avec le sigleF sélectionné dans un titre HTML (<h1>). -->
</header>

<form action="traitement.php" method="POST">

<!-- info perso  -->
<fieldset>
<legend>Informations Personnelles :</legend>
<br>
<!-- nom + prénom  -->
<div>  
            <label>Nom : </label> 
            <input type="text" name="nom" id="nom" maxlength="30" class="nomform" required placeholder=".....">
           
            <label>Prénom : </label>
            <input type="text" name="prenom" id="prenom" maxlength="30" class="prenomform" required placeholder=".....">
        

<!-- EMAIL -->

        <br>
        <br>
            <label>Email :  </label> 
            <input type="email" name="email" id="email" maxlength="30" class="email" required placeholder="xxxx@xxxx.com">
<!-- VILLE -->      
            <label>Ville :  </label> 
            <input type="text" name="ville" id="ville" maxlength="30" class="ville" required placeholder="Strasbourg">

<!-- ETABLISSEMENT -->
        <br>
        <br>
        <br>
            <label>Établissement d'origine :  </label> 
            <input type="text" name="etablissement" id="etablissement" maxlength="50" required placeholder="Lycée Des Metiers René Cassin">
        <br>
        <br>    
            <label>Ville de l'établissement :  </label> 
            <input type="text" name="villeEtab" id="villeEtab" maxlength="30" class ="villetat" required placeholder="Strasbourg">

 <!-- Formation -->
        <br>
        <br>
            <label>Formation Actuelle :  </label> 
            <input type="text" name="cursus" id="cursus" maxlength="50" required placeholder=" Bac STI2D ">
        <br>
        <br>
</fieldset>
<br>
<br>

<fieldset>
<legend>Informations Complémentaires :</legend>
<br>
<div>
<!-- Voeux -->
            <label>Pensez-vous vous inscrires au sein de notre établissement ? :</label>
            <input type="checkbox" name="inscrireEtat" > 
<br> 
<br>
            <label>Comptez-vous effectuer la même formation ailleurs ? : 
            <input type="checkbox" name="inscrireAilleurs" > 
<!-- cherche probleme faire if, si cocher oui valeur 1 sinon valeur 0 -->
</div>
<br>
</fieldset>
<br>
<br>

<button type="submit">Valider</button> 
<label>Envoyer le formulaire</label>
<br>
<br>
<button type="reset">Effacer</button>
<label>Effacer le formulaire</label>
<?php
echo '<input type="hidden" name="formation" id="formation" value="'.$formation.'">'
?>

</form>
<p>Merci de bien vouloir remplir tous les champs 👌</p>
<hr>
<h6>En validant, vous acceptez que vos données personnelles soient collectées et traitées par le Lycée des Métiers René Cassin, conformément à la politique de confidentialité et aux exigences du RGPD. Vous disposez d'un droit d'accès, de rectification, de suppression et d'opposition au traitement de vos données. Pour plus d'informations, veuillez nous contacter. Pour rappel, le remplissage du formulaire n'est pas obligatoire. À l'issue de la journée portes ouvertes, les données seront supprimées de la base de données.<h6>
<h6> 4 rue Shoch - 67065 Strasbourg cedex - Tél : 03.88.45.54.54 - Fax : 03-88-60-25-16</h6>
</body>
</html>