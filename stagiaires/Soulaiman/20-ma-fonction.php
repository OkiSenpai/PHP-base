<?php 

function estPair($nombre) {
        if ($nombre % 2 === 0) {
            return  "Le nombre $nombre est pair ";
        } else {
            return " Le nombre $nombre est impair";
        }
}
echo estPair(3). "<hr>"; 
echo estPair(4);
