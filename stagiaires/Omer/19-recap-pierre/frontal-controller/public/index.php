<?php

// Path
// stagiaires\Omer\19-recap-pierre\frontal-controller\public\index.php


if (isset($_GET['page'])) {
    switch ($_GET['page']) {
        case 'formation':
            include("../view/programVuew.php");
            break;
        case 'newsletter':
            include("../view/newsLetterView.php");
            break;
        case 'contact':
            include("../view/formulaireVuew.php");
            break;
        default:
            include("../view/homeView.php");
            break;
    }
} else {
    include("../view/homeView.php");
}

