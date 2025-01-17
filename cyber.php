<?php
$animaux = [
    ['type' => 'connexion',     'color' => '#ffae1a',     'title' => "Connexion", 'text' => "En 2025, connecte-toi aux autres, mais surtout à toi-même.<br>Ce sont les connexions humaines qui comptent le plus."],
    ['type' => 'resilience',    'color' => '#58e8b3',     'title' => "Résilience", 'text' => "Les connexions se créent malgré l'effondrement programmé du système.<br>En 2025, sois résilient face aux obstacles."],
    ['type' => 'liberte',       'color' => '#15c9ff',     'title' => "Liberté", 'text' => "L'adversité dépassée et libéré des difficultés, <br>que 2025 t'ouvre le champ des possibles&nbsp;!"],
    ['type' => 'evolution',     'color' => '#ffc107',     'title' => "Evolution", 'text' => "En 2025, sois libre de devenir une meilleure version de toi-même."],
    ['type' => 'harmonie',      'color' => '#7a4cff',     'title' => "Harmonie", 'text' => "Pour qu'à la fin vienne l'harmonie et l'équilibre."],
];
?>
<!doctype html>
<html lang="fr" class="js">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>2025</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital,opsz,wght@0,6..96,400..900;1,6..96,400..900&family=Montserrat:wght@100..900&family=Playfair+Display:ital,wght@0,400..900;1,400..900&display=swap"
          rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Righteous&family=Syne+Mono&family=Ubuntu+Mono:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/2025_cyber.css">
    <script src="./assets/js/cyber.js">
    </script>
</head>
<body>
<main>

    <div class="content">
        <article class="slides slides--contained effect-2  ">

            <div class="slide slide--current slide__intro"
                 data-animal=""
                 style="">
                <div class="slide__img glitch"
                     style="background-image:url(./assets/img/<?= $animal['type'] ?>.png)"></div>
                <div class="slide__text">

                    <div class="section__title">
                        <h2 class="glitch__title layers" data-text="2025"><span>2025</span></h2>
                        <p class="slide__description">Des voeux simples<br> pour ce début d'année</p>
                    </div>

                    <div class="section__info">Cliquez pour continuer</div>

                </div>
            </div>
            <?php foreach ($animaux as $k => $animal) { ?>

                <div class="slide slide__<?= $k ?> <?= ($k == 0 ? '' : '') ?> "
                     data-animal="<?= $animal['type'] ?>"
                     style="--color: <?= $animal['color'] ?>;">
                    <div class="slide__img glitch"
                         style="background-image:url(./assets/img/<?= $animal['type'] ?>.png)"></div>
                    <div class="slide__text">
                        <span class="slide__text_bg"></span>
                        <h2 class="slide__title glitch__title layers" data-text="<?= $animal['title'] ?>">
                            <span><?= $animal['title'] ?></span>
                        </h2>
                        <p class="slide__description"><?= $animal['text'] ?></p>
                    </div>
                </div>
            <?php } ?>

            <div class="slide slide__<?= $k ?> <?= ($k == 0 ? 'slide--current' : '') ?> "
                 data-animal="<?= $animal['type'] ?>"
                 style="">
                <div class="slide__img glitch"
                     style="background-image:url(./assets/img/<?= $animal['type'] ?>.png)"></div>
                <div class="slide__text">
                        <h1>Bonne année</h1>
                        <h2>2025</h2>
                </div>

                <div class="section__info">Cliquez pour revoir</div>
            </div>
        </article>
    </div>

    <div id="cursor">+ cliquez</div>
</main>

</body>
</html>
