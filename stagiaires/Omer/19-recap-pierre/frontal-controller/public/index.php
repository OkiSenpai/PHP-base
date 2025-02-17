<?php

// Path
// stagiaires\Omer\19-recap-pierre\frontal-controller\public\index.php


if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'formation':
            include("../view/formationView.php");
            break;
        case 'programme':
            include("../view/programView.php");
            break;
        case 'newsletter':
            include("../view/newsLetterView.php");
            break;
        case 'contact':
            include("../view/formulaireView.php");
            break;
        
        default:
            include("../view/homeView.php");
            break;
    }
} else {
    include("../view/homeView.php");
}



