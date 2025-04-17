<?php
# formateur\19-recap-CF\public\index.php

// si on a une variable get nommée p
if(isset($_GET['p'])){

    // création d'un switch qui va vérifier la variable get p
    switch($_GET['p']){
        case "formations":
            include "../view/formationsView.php";
            break;
        case "programme":
            include "../view/programmeView.php";
            break;
        case "newsletter":
            include "../view/newsletterView.php";
            break;
        case "contact":
            include "../view/formulaireView.php";
            break;
        // variable p pas dans le switch
        default:
            include "../view/error404View.php";
    }

// sinon nous sommes sur l'accueil    
}else{
    // Appel de la vue
    include "../view/homepageView.php";
}
?>