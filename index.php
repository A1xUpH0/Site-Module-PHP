<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Module PHP David</title>
    <link rel="stylesheet" href="assets/CSS/custom.css">
    <script src="../JS/jquery-3.6.1.min.js"></script>
</head>
<body>
<?php
include "./assets/PHP/navBar.php";
echo'
<main>
    <section id="Horizontal">
        <div class="BlockFull">
            <h1>David ALLAIS</h1>
            <p id="desc">
                Currently training as a Web & App Developer, I m looking
                for a block release apprenticeship
            </p>
            <h2>Personal Details</h2>
            <p id="email">
                <span class="icon">&#128232;</span>
                davidallais2001@gmail.com
            </p>
            <p id="phone">
                <span class="icon">&#128241;</span> +33 6 51 97 32 16
            </p>
            <p id="address">
                <span class="icon">&#127968;</span> 2, Allée du Déjeuner
                sur l Herbe, 74960 CRAN GEVRIER, France
            </p>
            <h2>Skills</h2>
            <ul id="SkillsList">
                <li class="Skills"><p>Team Work</p></li>
                <li class="Skills"><p>Adaptability</p></li>
                <li class="Skills"><p>Dynamism</p></li>
                <li class="Skills"><p>HTML / CSS</p></li>
                <li class="Skills"><p>WordPress</p></li>
            </ul>
        </div>
        <div class="BlockTwoPart LastBlock">
            <div class="Block1">
                <h2>Work Experience</h2>
                <p class="WoExp">
                    Multi - Skilled Employee <br />
                    McDonald | St Alban Leysse , France <br />Summer
                    2020 , Summer 2021
                </p>
                <h2 id="Edu">Education</h2>
                <p class="edu">
                    Starting Dev. |
h1 {
    color: darkred;
}
                    <a
                            id="CN"
                            href="https://le-campus-numerique.fr/"
                            target="_blank"
                    >
                        Le Campus numérique In The alps
                    </a>
                    | March 2022 - Now
                </p>
                <p class="edu">
                    <a id="pix" href="https://pix.fr/" target="_blank">
                        Certification PIX
                    </a>
                    | Score : 399 | August 2022
                </p>
                <p class="edu">
                    Baccalauréat STMG - Highschool Gaspard Monge |
                    Chambery | 2018
                </p>
            </div>
            <div class="Block2">
                <h2>Internship</h2>
                <p>
                    9th at 27th May 2022 Défi-Orthographique |
                    Peillonnex, France
                </p>
                <p>
                    4th at 22nd July 2022 Centre de loisirs Forezan |
                    Cognin, France
                </p>
                <div id="FlexLogo">
                    <img
                            id="LogoDO"
                            src="./assets/Pictures/LogoDO.png"
                            alt="Logo de l entreprise Défi Orthographique"
                    /><img
                            id="LogoCentre"
                            src="./assets/Pictures/LogoCentre.png"
                            alt="Logo du Centre de Loisirs du Forezan"
                    />
                </div>
            </div>
        </div>
    </section>
</main>';
?>
<script src="./assets/JS/script.js"></script>
</body>
</html>