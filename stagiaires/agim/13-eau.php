<?php
$temperature = random_int(-100, 200);

if ($temperature <= 0) {
    echo ("L'eau est solide à $temperature °");
} elseif ($temperature >= 1 && $temperature <= 99) {
    echo ("L'eau est liquide à $temperature °");
} else {
    echo ("L'eau est gazeuse à $temperature °");
}
