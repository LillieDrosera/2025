<?php
$animaux = [
   ['type' => 'agneau', 'title' => "", 'text' => "Pour 2025, je vous souhaite une année <br><strong>douce comme un agneau, </strong><br>parce que franchement, on a tous besoin de tendresse ! ", 'color' => "#2f0b11",],
   ['type' => 'baleine', 'title' => "", 'text' => "Mais surtout, prenez le temps de <br><strong>rire comme une baleine .</strong><br> Eclatant, bruyant et sans retenue, parce que franchement, ça fait du bien.", 'color' => "#060f33",],
   ['type' => 'chat', 'title' => "", 'text' => "Que cette année soit remplie de moments où, <br><strong>quand le chat n’est pas là, les souris dansent !</strong> ", 'color' => "#021e0e",],
   ['type' => 'cochon', 'title' => "", 'text' => "Prenez soin de vous et de ceux avec qui vous êtes <br><strong>copain comme cochon.</strong>", 'color' => "#3e041a",],
   ['type' => 'chien', 'title' => "", 'text' => "En 2025, <strong>ayez du chien ,</strong><br> ce petit quelque chose qui attire les regards, qui inspire les autres, et qui vous rend irrésistibles.", 'color' => "#000",],
   ['type' => 'renard', 'title' => "", 'text' => "Mais aussi, <strong>rusés comme un renard,</strong><br> car un peu de malice et beaucoup d’intelligence vous mèneront loin !", 'color' => "#231304",],
   ['type' => 'mule', 'title' => "", 'text' => "Soyez <strong>têtus comme une mule</strong><br> quand il s'agit de vos rêves : ne lâchez rien...", 'color' => "#060f33",],
   ['type' => 'loup', 'title' => "", 'text' => "N'ayez pas peur de vous <br><strong>jeter dans la gueule du loup</strong><br> si c’est pour défendre vos rêves : parfois, le loup n’est qu’un gros toutou qui grogne pour le style.", 'color' => "#231304",],
   ['type' => 'poule', 'title' => "", 'text' => "Certaines opportunités n'arrivent que <br><strong>quand les poules ont des dents...</strong>", 'color' => "#000",],
   ['type' => 'lynx', 'title' => "", 'text' => "Alors gardez un <strong>oeil de lynx</strong><br> pour les repérer, même les plus improbables !", 'color' => "#000",],
   ['type' => 'marmotte', 'title' => "Et la marmotte ?", 'text' => "Elle met toujours le chocolat dans le paper d'alu !", 'color' => "#000",],
];
?>
<!doctype html>
<html lang="fr">
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

    <link rel="stylesheet" href="./assets/css/2025.css">
    <script src="./assets/js/index.js">
    </script>
</head>
<body>
<main>

    <div class="section section_intro" style="">
        <div class="section-inner">
            <div class="section__title">
                <h1>2025</h1>
                <h2>Des voeux simples pour sourire<br> en ce début d'année</h2>
            </div>

            <div class="section__info">Cliquez pour continuer</div>
        </div>
    </div>

    <?php foreach ($animaux as $k => $animal) { ?>
        <article class="section section_<?= $k ?> "
             data-animal="<?= $animal['type'] ?>"
             style="">
            <!-- --bg-img:url(../img/<?= $animal['type'] ?>.png);  -->
            <!-- --color:<?= $animal['color'] ?>;-->
            <div class="section-inner">
                <div class="section-bg"></div>
                <div class="section-content">
                    <?php if (!empty($animal['title'])) { ?>
                        <div class="title"><?= $animal['title'] ?></div>
                    <?php } ?>
                    <div class="text"><?= $animal['text'] ?></div>
                </div>
            </div>
        </article>
    <?php } ?>
    <div class="section section_final" data-animal="marmotte" style="">
        <div class="section-inner">

            <div class="section__title">
                <h1>Bonne année</h1>
                <h2>2025</h2>
            </div>

            <div class="section__info">Cliquez pour revoir</div>

        </div>
    </div>

    <div id="cursor">
        + cliquez
    </div>
</main>

</body>
</html>
