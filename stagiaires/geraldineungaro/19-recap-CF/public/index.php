<?php
# formateur\19-recap-CF\public\index.php

/* 
*  ------------------------------------
*  Ce fichier est le contrôleur frontal
*  ------------------------------------
*/

// Gestion des variables GET

if (isset($_GET['p'])){
switch ($_GET['p']) {
    case 'formations':
        include "../view/formationView.php";
        break;
    case 'formulaire':
        include "../view/formulaireView.php";
        break;
    case 'newsletter':
        include "../view/newsletterView.php";
        break;
    case 'programme':
        include "../view/programmeView.php";
        break;
    default:
        include "../view/erreur404View.php";
        break;
}
}else {


// Appel d'une des vues (par défaut l'accueil)
    include "../view/homepageView.php";

}

//var_dump($_GET);