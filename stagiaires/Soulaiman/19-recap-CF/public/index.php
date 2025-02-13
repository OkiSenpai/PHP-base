<?php
# formateur\19-recap-CF\public\index.php

/* 
*  ------------------------------------
*  Ce fichier est le contrôleur frontal
*  ------------------------------------
*/

// Gestion des variables GET

  if (isset($_GET['page'])) {
    switch($_GET['page']){
        case 'formation':
            include "../view/formationsView.php";
        break;
        case 'programme' :
             include "../view/programmeView.php";
        break;
        case 'newsletter' :
             include "../view/newsletterView.php";
        break;
        case 'contact' :
             include "../view/contactView.php";
        break;
    }
    
}else{


// Appel d'une des vues (par défaut l'accueil)
include "../view/homepageView.php";
}