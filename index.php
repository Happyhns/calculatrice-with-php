<!DOCTYPE html>

<?php

session_start();

// Initialiser l'affichage
if (!isset($_SESSION['display'])) {
    $_SESSION['display'] = ''; 
}
// Récupérer l'affichage actuel
$display = $_SESSION['display'];

// Fonction pour ajouter un chiffre
function ajouterChiffre($display, $val) { // Ajoute le chiffre ou l'opérateur au display
    return $display . $val;
}

// Fonction pour effacer
function effacer() {
    return '';
}

// Fonction pour calculer
function calculer($expression) {

    // Séparer les nombres et opérateurs
    preg_match('/(\d+)([\+\-\*\/])(\d+)/', $expression, $matches);

    if (!$matches) return "Erreur"; // Si l'expression n'est pas valide

    $a = $matches[1]; // $matches[0] est l'expression complète, $matches[1] est le premier nombre, $matches[2] est l'opérateur, et $matches[3] est le second nombre
    $op = $matches[2]; // $matches[2] est l'opérateur
    $b = $matches[3];

    switch ($op) {
        case '+': return addition($a, $b); // Appelle la fonction addition si l'opérateur est '+'
        case '-': return soustraction($a, $b); // Appelle la fonction soustraction si l'opérateur est '-'
        case '*': return multiplication($a, $b); // Appelle la fonction multiplication si l'opérateur est '*'
        case '/': return division($a, $b); // Appelle la fonction division si l'opérateur est '/'
        default: return "Erreur";
    }
}

// Fonctions opérations (OBLIGATOIRE dans ton devoir)
function addition($a, $b) {
    return $a + $b;
}

function soustraction($a, $b) {
    return $a - $b;
}

function multiplication($a, $b) {
    return $a * $b;
}

function division($a, $b) {
    if ($b == 0) {
        return "Erreur";
    }
    return $a / $b;
}

// Gestion des boutons
if (isset($_POST['btn'])) {

    $btn = $_POST['btn'];

    if ($btn == 'C') {
        $display = effacer();
    }
    elseif ($btn == '=') {
        $display = calculer($display);
    }
    else {
        $display = ajouterChiffre($display, $btn);
    }

    $_SESSION['display'] = $display;
}

?>

<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Calculatrice PHP</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="calculator">
    
    <!-- Écran -->
    <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> <!-- Formulaire pour envoyer les données à PHP -->
        <input type="text" name="display" class="display"
        value="<?php echo $display ?? ''; ?>" readonly> <!-- Affiche le résultat ou les entrées, en lecture seule -->

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