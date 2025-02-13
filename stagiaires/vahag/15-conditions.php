<?php
$note = rand(0, 10);
if ($note>=0 && $note<=3){
    echo "$note : EXACTEMENT";
}elseif ($note>=4 && $note<=5){
    echo "$note : Nul, étudie la prochaine fois";
}elseif ($note>=6 && $note<=7){
    echo "$note : Peut mieux faire";
} else {
    echo "$note : très bien";
}
