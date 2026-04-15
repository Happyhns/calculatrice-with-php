<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h1>Calculatrice</h1>

<div class="calculator">
    
    <!-- Écran -->
    <form method="POST"> // Formulaire pour envoyer les données à PHP
        <input type="text" name="display" class="display" readonly> // Champ de saisie pour afficher les résultats, en lecture seule
    </form>
</div>

</body>
</html>