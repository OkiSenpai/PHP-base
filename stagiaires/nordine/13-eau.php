
<?php

$temperature = -100;

if ($temperature <= 0) {
    echo"solide en dessous de 0 compris";
} elseif($temperature >= 1 && $temperature <= 99) {
    echo"liquide entre 1 et 99°";
} else {
    echo"L'eau est gazeuse ";
}
