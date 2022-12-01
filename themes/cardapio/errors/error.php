<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= url("assets/theme/fontawesome-free/css/all.css"); ?>" type="text/css"/>
	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="<?= url("/assets/theme/css/style.css"); ?>" />

    <?= $head; ?>
</head>

<body id="bg-error">
    <div id="notfound">
        <div class="notfound-bg"></div>
        <div class="notfound">
            <div class="notfound-404">
                <h1><?= $error->codes;?></h1>
            </div>
            <h2><?= $error->desc; ?></h2>

            <a title="<?= $error->linkTitle; ?>" href="<?= $error->link; ?>" class="home-btn">Home</a>
            <a href="#" class="contact-btn">Contato</a>

            <div class="notfound-social">
                <a href="<?= $error->link; ?>"><i class="fab fa-facebook"></i></a>
                <a href="<?= $error->link; ?>"><i class="fab fa-twitter"></i></a>
                <a href="<?= $error->link; ?>"><i class="fab fa-instagram"></i></a>
                <a href="<?= $error->link; ?>"><i class="fab fa-google-plus"></i></a>
            </div>
        </div>
    </div>

</body>

</html>
