<?php
session_start();

$Word = $_SESSION["message"];
$Vowels = "aeiouy";

function printWord ($str) {

    for ($i = 0; $i < strlen($str); $i++) {
        echo ($str[$i]);
    }
}

function printWordReverse ($str) {

    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        echo ($str[$i]);
    }
}

function isVowels ($char, $str) {

    $res = false;

    for ($i = 0; $i < strlen($str); $i++) {
        if ($str[$i] == $char) {
            $res = true ;
        }
    }
    return $res;
}

function printWordVowels ($str) {

    $Vowels = "aeiouyAEIOUY";

    for ($i = 0; $i < strlen($str); $i++) {
        if ( !isVowels ($str[$i], $Vowels)){
            echo ($str[$i]);
        }
    }
}


echo "</br></br>";
printWord($Word);
echo "</br>";
printWordReverse($Word);
echo "</br>";
printWordVowels($Word);
echo "</br>";
echo "</br>";
?>
