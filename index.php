<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="calculator">
    
    <!-- Écran -->
    <form method="POST"> <!-- Formulaire pour envoyer les données à PHP -->
        <input type="text" name="display" class="display" readonly> <!-- Champ de saisie pour afficher les résultats, en lecture seule -->

        <!-- Boutons -->
        <div class="buttons">
            <button type="submit" name="btn" value="7">7</button>
            <button type="submit" name="btn" value="8">8</button>
            <button type="submit" name="btn" value="9">9</button>
            <button type="submit" name="btn" value="/">÷</button>

            <button type="submit" name="btn" value="4">4</button>
            <button type="submit" name="btn" value="5">5</button>
            <button type="submit" name="btn" value="6">6</button>
            <button type="submit" name="btn" value="*">×</button>

            <button type="submit" name="btn" value="1">1</button>
            <button type="submit" name="btn" value="2">2</button>
            <button type="submit" name="btn" value="3">3</button>
            <button type="submit" name="btn" value="-">-</button>
    
            <button type="submit" name="btn" value="0">0</button>
            <button type="submit" name="btn" value="C">C</button>
            <button type="submit" name="btn" value="=">=</button>
            <button type="submit" name="btn" value="+">+</button>

        </div>
    </form>
</div>

</body>
</html>