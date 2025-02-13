<?php
$note = rand(0, 10);
switch($note){
case $note>0 && $note<3:
    echo "EXACTEMENT";
    break;
case $note>=4 && $note<=5:
    echo "Nul, étudie la prochaine fois";
    break; 
case $note>=6 && $note<=7:
    echo "Peut mieux faire";
    break;
default:
    echo "très bien";
}
// if ($note>=0 && $note<=3){
//     echo "$note : EXACTEMENT";
// }elseif ($note>=4 && $note<=5){
//     echo "$note : Nul, étudie la prochaine fois";
// }elseif ($note>=6 && $note<=7){
//     echo "$note : Peut mieux faire";
// } else {
//     echo "$note : très bien";
// }
