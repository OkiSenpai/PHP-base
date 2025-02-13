<?php
/*
  Déclaration de variables au nom valide non strictement typées.
  Le type de la variable est déterminé par la valeur qu'elle contient
*/

// variable valide de type string (en snake_case)
$nom_prenom = "Nordine Abdelkader";
// variable valide de type integer (en camelCase)
$nombreEntier = 123;
// variable valide de type float (en Upper CamelCase - PascalCase)
$nombreFloat = 123.456;
// variable valide de type boolean
$nomBoolean = true; // ou false
// variable valide de type array (indexé)
$table = [1, 2, 3];
// variable valide de type array (associatif)
$tableAssociatif = ["nom" => "valeur1", "prenom" => "valeur2"];
// variable valide de type null
$varNull= null;

// affichage des variables via le débugueur var_dump()
var_dump($nom_prenom, $nombreEntier, $nombreFloat, 
$nomBoolean, $table, $tableAssociatif,$tableAssociatif["nom"], $varNull);
?>