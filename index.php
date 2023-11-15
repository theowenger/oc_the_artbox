<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>
    <?php
    include "header.php";
    ?>
    <main>
        <div id="liste-oeuvres">
            <?php
            require "oeuvres.php";
            foreach ($tableau as $cle => $oeuvre) {
            ?>
            <article class="oeuvre">
                <a href="<?php echo 'oeuvre.php?id=' . $oeuvre['id']; ?>">
                    <img src="<?php echo $oeuvre['img']; ?>" alt="<?php echo $oeuvre['name']; ?>">
                    <h2><?php echo $oeuvre['name']; ?></h2>
                    <p class="description"><?php echo $oeuvre['artist']; ?></p>
                </a>
            </article>
            <?php
            }
            ?>
        </div>
    </main>
    <?php
    require "footer.php";
    ?>
</body>

</html>