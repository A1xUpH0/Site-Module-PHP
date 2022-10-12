<?php

if($_GET['page'] == 'home'){
    $title = "Module PHP David | HOMEPAGE";
    $desc = "Homepage | Un petit site pour montrer que je sais utiliser les langage 
    HTML, CSS, PHP.";
    include './assets/PHP/Content/home.php';
}
elseif($_GET['page'] == 'portfolio'){
    $title = "Module PHP David | PORTFOLIO";
    $desc = "Portfolio | Assortiment de dessins réalisés par moi même.";
    include './assets/PHP/Content/portfolio.php';
}
elseif($_GET['page'] == 'contact'){
    $title = "Module PHP David | CONTACT";
    $desc = "Contact | page contact du mon site, permettant de me contacter via un 
    formulaire.";
    include './assets/PHP/Content/contact.php';
}
else{
    $title = "Module PHP David | COLOR";
    $desc = "Color | Une page permettant de choisir aléatoirement 2 couleurs et de 
    les fusionner pour en créer une nouvelle.";
    include './assets/PHP/Head/head.php';
    echo"<body>";
    include "./assets/PHP/Object/navBar.php";
    echo"<h1>";
    include './color.php';
    echo"</h1></body></html>";
}
?>