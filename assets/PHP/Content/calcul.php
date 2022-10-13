<?php

$Nb1 = rand(1, 9);
$Nb2 = rand(1, 9);
$Nb3 = rand(1, 9);

function AddNb ($nb1,$nb2) {
    return $nb1 + $nb2;
}

function MultNb ($nb1,$nb2) {
    return $nb1 * $nb2;
}

echo"(";
echo($Nb1);
echo" + ";
echo($Nb2);
echo") x ";
echo($Nb3);
echo" = ";

echo (MultNb(AddNb($Nb1,$Nb2),$Nb3));
?>
