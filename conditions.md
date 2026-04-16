/*
Projet : Créer une Calculatrice Web en PHP

Objectif

Créer une calculatrice simple et fonctionnelle en utilisant HTML, CSS et PHP.
L’application devra permettre à l’utilisateur d’effectuer des opérations
mathématiques de base via une interface web.

1. Fonctionnalités à implémenter

La calculatrice doit permettre de :

- Afficher les nombres cliqués
- Effectuer les opérations suivantes :
  - addition (+)
  - soustraction (-)
  - multiplication (×)
  - division (÷)
- Afficher le résultat lorsque l’utilisateur clique sur =
- Effacer l’écran avec le bouton C

2. Interface attendue

Un écran d’affichage

Il affiche :
- les nombres saisis
- les opérations
- le résultat

Les boutons doivent être disposés comme une vraie calculatrice :

7  8  9  ÷
4  5  6  ×
1  2  3  -
0  C  =  +

3. Contraintes techniques

HTML

- Structurer la calculatrice avec des div ou buttons
- Séparer les sections :
  - écran
  - boutons
- Utiliser un formulaire (form) pour envoyer les données à PHP

CSS

- Centrer la calculatrice sur la page
- Ajouter :
  - bordures
  - couleurs
  - effet hover sur les boutons

PHP

- Utiliser $_POST ou $_GET pour récupérer les valeurs
- Il faut au moins 4 functions 
- Gérer :
  - l’affichage des chiffres
  - les opérations
  - le calcul du résultat
- Ne pas utiliser eval() (interdit pour des raisons de sécurité)
- Gérer les erreurs :
  - division par zéro

4. Exemple d’utilisation

Si l’utilisateur clique :

5 puis + puis 3 puis =

La calculatrice doit afficher : 8

5. Résultat attendu

Une page web contenant :

- une calculatrice fonctionnelle
- une interface similaire à une vraie calculatrice
- un design simple mais propre

Le code doit être dans un fichier principal :

index.php

6. Versioning (GitHub)

Le projet doit être versionné sur GitHub avec :

- au moins 20 commits montrant l’évolution du projet
- deux branches :
  - main : version finale stable
  - develop : développement et tests des fonctionnalités

*/