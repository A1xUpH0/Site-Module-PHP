<?php

$_Col1 = rand(1, 3);
$_Col2 = rand(1, 3);

$_ColStr1 = "";
$_ColStr2 = "";

function nbToStr ($nb)
{
    if($nb == 1){
        return  "blue";
    }
    elseif($nb == 2){
        return "yellow";
    }
    else{
        return  "red";
    }
}

$_ColStr1 = nbToStr ($_Col1);
$_ColStr2 = nbToStr ($_Col2);

echo($_ColStr1);
echo" | ";
echo($_ColStr2);
echo" | ";

if($_ColStr1 == "blue" && $_ColStr2 == "blue"){
    echo " blue";
}
elseif($_ColStr1 == "blue" && $_ColStr2 == "yellow" || $_ColStr1 == "yellow" && $_ColStr2 == "blue" ){
    echo " green";
}
elseif($_ColStr1 == "blue" && $_ColStr2 == "red" || $_ColStr1 == "red" && $_ColStr2 == "blue" ){
    echo " purple";
}
elseif ($_ColStr1 == "yellow" && $_ColStr2 == "yellow"){
        echo" yellow";
    }
elseif($_ColStr1 == "yellow" && $_ColStr2 == "red" || $_ColStr1 == "red" && $_ColStr2 == "yellow" ){
    echo " orange";
}
else{
    echo " red";
}
?>
