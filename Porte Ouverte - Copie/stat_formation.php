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
    <link href="style.css" rel="stylesheet">  
</head>

<body>
    <br>
    <br>
    <br>
    
    <h1>Journée Portes Ouvertes du 10 février 2024 </h1>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <h1>Statistique ADMIN</h1>

    <br>
    <br>

    <p> Veuillez chosisir la formation :</p>

    <!-- MISE EN PLACE DU MENU DEROULANT POUR CHOISIR LA FORMATION  -->
    <form action="stat.php" method="POST" class="formation">
        <?php
            include 'get_formation.php'
        ?>
        <br>
        <br>
        <p> Veuillez entrer le mdp : </p>
        <input type="password" id="mdp" name="mdp" required />
        <br>
        <?php
            if(isset($_GET['message']))
            {
                $message = $_GET['message'];
                echo "<p>$message<p>";
            }
        ?>

        <br>
        <input type="submit">
        <button type="reset">Effacer</button>

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
        <br>


        <footer>
            <h6> 4 rue Shoch - 67065 Strasbourg cedex - Tél : 03.88.45.54.54 - Fax : 03-88-60-25-16</h6>
        </footer>

    </form>
</body>
</html>