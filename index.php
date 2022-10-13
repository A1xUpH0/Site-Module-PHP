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

    if(strlen($_POST['mess']) < 5 && isset($_POST['mess'])){
        $ErrorMess = "[ERROR] Please enter a message" ;
    }
    if(strlen($_POST['reason']) == 0 && isset($_POST['mess'])){
        $ErrorMess = "[ERROR] Please select a reason" ;
    }
    if(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL) && isset($_POST['email'])){
        $ErrorMess = "[ERROR] Please enter a valid Email" ;
    }
    if(strlen($_POST['Fname']) == 0 && strlen($_POST['Lname']) == 0 && isset($_POST['Fname']) && isset($_POST['Lname'])){
        $ErrorMess = "[ERROR] Please enter a First name and a Last name" ;
    }
    include './assets/PHP/Content/color.php';

    $file = './assets/TXT/form';

    $current = $_POST['gender'];
    $current .= " ";
    $current .= $_POST['Fname'];
    $current .= " ";
    $current .= $_POST['Lname'];
    $current .= "\n";
    $current .= $_POST['email'];
    $current .= "\n";
    $current .= $_POST['reason'];
    $current .= "\n";
    $current .= strval($_POST['mess']);

    file_put_contents($file, $current);
}
?>