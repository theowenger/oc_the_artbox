<?php
require 'oeuvres.php';

$queryId = $_GET['id'];
$oeuvre = null;


foreach ($tableau as $cle => $element) {
    if ($element['id'] == $queryId) {
        $oeuvre = $element;
        break;
    }
}
?>
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
        <article id="detail-oeuvre">
            <div id="img-oeuvre">
                <img src="<?php echo $oeuvre['img']; ?>" alt="<?php echo $oeuvre['name']; ?>">
            </div>
            <div id="contenu-oeuvre">
                <h1><?php echo $oeuvre['name']; ?></h1>
                <p class="description"><?php echo $oeuvre['artist']; ?></p>
                <p class="description-complete">
                    <?php echo $oeuvre['description'] ?>
                </p>
            </div>
        </article>

    </main>
    <?php
    include "footer.php";
    ?>
</body>

</html>