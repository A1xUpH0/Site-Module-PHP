<?php session_start();

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


    if($_POST["reason"] == "Option One"){
        $one = "checked";
    }
    elseif($_POST["reason"] == "Option Two"){
        $two = "checked";
    }
    elseif($_POST["reason"] == "Option Three"){
        $three = "checked";
    }

    $_SESSION["gender"]=$_POST['gender'];
    $_SESSION["firstName"]=$_POST['Fname'];
    $_SESSION["lastName"]=$_POST['Lname'];
    $_SESSION["email"]=$_POST['email'];
    $_SESSION["reason"]=$_POST['reason'];
    $_SESSION["tabReason"] = array(0 => $one, 1 => $two, 2 => $three);
    $_SESSION["message"]=$_POST['mess'];

    if(strlen($_SESSION["message"]) < 5 && isset($_SESSION["message"])){
        $ErrorMess = "[ERROR] Please enter a message" ;
    }
    if(strlen($_SESSION["reason"]) == 0 && isset($_SESSION["message"])){
        $ErrorMess = "[ERROR] Please select a reason" ;
    }
    if(!filter_var($_SESSION["email"],FILTER_VALIDATE_EMAIL) && isset($_SESSION["email"])){
        $ErrorMess = "[ERROR] Please enter a valid Email" ;
    }

    if(strlen($_SESSION["firstName"]) == 0 && isset($_POST["Fname"]) || strlen( $_SESSION["lastName"]) == 0 && isset( $_POST["Lname"])){
        $ErrorMess = "[ERROR] Please enter a First name and a Last name" ;
    }

    if($_SESSION["reason"] == "Option One"){
        $one = "checked";
    }
    elseif($_SESSION["reason"] == "Option Two"){
        $two = "checked";
    }
    elseif($_SESSION["reason"] == "Option Three"){
        $tree = "checked";
    }

    include './assets/PHP/Content/color.php';

    $file = './assets/TXT/form';

    $current = $_SESSION["gender"];
    $current .= " ";
    $current .= $_SESSION["firstName"];
    $current .= " ";
    $current .=  $_SESSION["lastName"];
    $current .= "\n";
    $current .= $_SESSION["email"];
    $current .= "\n";
    $current .= $_SESSION["reason"];
    $current .= "\n";
    $current .= ($_SESSION["message"]);

    file_put_contents($file, $current);
}
?>