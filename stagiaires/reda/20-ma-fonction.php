<?php


function pair($number)
{
  return $number % 2 == 0 ? 'pair' : 'pas pair';
}

$nombres = rand(1, 20);

echo "Le nombre $nombres est " . pair($nombres);
