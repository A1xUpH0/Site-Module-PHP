<?php

if($_GET['page'] == 'home'){
    include './assets/PHP/Head/homeHead.php';
    include './assets/PHP/Content/home.php';
}
elseif($_GET['page'] == 'portfolio'){
    include './assets/PHP/Head/portfolioHead.php';
    include './assets/PHP/Content/portfolio.php';
}
elseif($_GET['page'] == 'contact'){
    include './assets/PHP/Head/contactHead.php';
    include './assets/PHP/Content/contact.php';
}

/*if($_GET['page'] == 'home'){
    include './assets/PHP/Content/home.php';
}
elseif($_GET['page'] == 'portfolio'){
    include './assets/PHP/Content/portfolio.php';
}
elseif($_GET['page'] == 'contact'){
    include './assets/PHP/Content/contact.php';
}*/

/*switch ($_SERVER['REQUEST_URI']) {
    case '?page=home':
        include './assets/PHP/Head/homeHead.php';
        break;
    case '/?page=portfolio':
        include './assets/PHP/Head/portfolioHead.php';
        break;
    case '/?page=contact':
        include './assets/PHP/Head/contactHead.php';
        break;
}*/

/*switch ($_SERVER['REQUEST_URI']) {
    case '/?page=home':
        include './assets/PHP/Content/home.php';
        break;
    case '/?page=portfolio':
        include './assets/PHP/Content/portfolio.php';
        break;
    case '/?page=contact':
        include './assets/PHP/Content/contact.php';
        break;
}*/
?>