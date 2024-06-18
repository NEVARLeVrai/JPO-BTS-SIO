<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta property="og:site_name" content="Journée Porte Ouverte - Lycée René Cassin 2024">
    <meta property="og:title" content="&#x26CA; Journée Porte Ouverte - Lycée René Cassin 2024">
    <meta property="og:description" content=" be careful where you step. it's still under construction!">
    <meta property="og:url" content="http://www.lyceecassin-strasbourg.eu/">
    <meta property="og:image:url" content="logo.png">
    <link rel="icon" href="logo2.png">
    <title>Journée Porte Ouverte - Lycée René Cassin 2024</title>
    <link href="style.css" rel="stylesheet">  
</head>

<body>

    <header>
        <img style="float:right" src="logo.png" class="logo">
        <h1>Journée Portes Ouvertes du 10 février 2024 </h1>
    </header> 

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <img style="float:left" src="lycée image.png">

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <p>Situé au cœur du quartier universitaire de Strasbourg,</p>
    <h4>LE LYCEE RENÉ CASSIN</h4>
    <p>se distingue par sa volonté d'amener ses élèves et étudiants au plus haut niveau.</p>
    <p>Du baccalauréat professionnel aux BTS, CPGE et DCG, l'établissement propose un éventail de formations pluridisciplinaires.</p>
    <br>
    <p> Veuillez chosisir la formation qui vous intéresse : </p>

    <!-- MISE EN PLACE DU MENU DEROULANT POUR CHOISIR LA FORMATION  -->

    <form action="formulaire.php" method="POST" class="formation">
        <?php
            include 'get_formation.php'
        ?>
        <input type="submit">

        <!-- EXPLICATION  -->

        <!-- form -- créer le formulaire 
        action="formulaire.php" -- lorsqu'on clique sur valider les données sont envoyés au fichier formulaire.php
        method="POST" -- les données ne seront pas visible dans l'url
        class="formation" -- utiliser pour le css
        get_formation.php -- récupération des données 
        button -- bouton d'envoie de type submit (envoyer) -->

        <br>
        <br>

        <h7>Veuillez choisir une formation à la fois, si vous êtes intéréssé par plusieurs formations, vous devrez dans ce cas là remplir le formulaire une deuxième fois. </h7>

        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>
        <br>

        <footer>
            <h6> 4 rue Shoch - 67065 Strasbourg cedex - Tél : 03.88.45.54.54 - Fax : 03-88-60-25-16</h6>
        </footer>

    </form>
    
</body>
</html>