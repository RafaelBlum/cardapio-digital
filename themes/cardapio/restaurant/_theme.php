<!DOCTYPE html>
<html lang="pt-br">
<head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- =========================  CSS DEFAULT  =============================================================== -->
        <link rel="stylesheet" href="<?= url("assets/theme/plugins/bootstrap-4.6.1/css/bootstrap.css"); ?>" type="text/css"/>
        <link rel="stylesheet" href="<?= url("assets/theme/fontawesome-free/css/all.css"); ?>" type="text/css"/>

        <!-- ====================  CSS PERSONALIZED  =============================================================== -->
        <link rel="stylesheet" href="<?= url("assets/theme/css/style.css"); ?>" type="text/css"/>
        <link rel="stylesheet" href="<?= url("assets/theme/css/responsive.css"); ?>" type="text/css"/>


        <?= $v->section("styles"); ?>
        <?= $head; ?>
    </head>
<body>


    <!-- ==================================  HEADER  =============================================================== -->
    <?= $v->insert("restaurant/partials/head"); ?>

    <!-- ==================================  MENU  ================================================================= -->
    <?= $v->insert("restaurant/partials/header"); ?>

    <!-- ==================================  CONTEÚDO  ============================================================= -->
    <div class="main">
        <?= $v->section("content"); ?>
    </div>

    <!-- ==================================  FOOTER  =============================================================== -->
    <?= $v->insert("restaurant/partials/footer"); ?>
</body>

    <!-- ==================================  SCRIPT  =============================================================== -->
    <script src="<?= url("assets/theme/js/jquery-3.6.0.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= url("assets/theme/js/jquery.form.js"); ?>" type="text/javascript"></script>
    <script src="<?= url("assets/theme/js/jquery-ui.js"); ?>" type="text/javascript"></script>
    <script src="<?= url("assets/theme/plugins/bootstrap-4.6.1/js/bootstrap.bundle.js"); ?>" type="text/javascript"></script>


    <!-- WAYPOINTS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
    <!-- COUNTER UP -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

    <!-- =========== SCROLL   ========= -->
    <script src="<?= url("assets/theme/js/jquery.nicescroll.js"); ?>" type="text/javascript"></script>
    <!-- ===========  SCROLL  ========= -->
    <script src="<?= url("assets/theme/js/jquery.scrollUp.min.js"); ?>" type="text/javascript"></script>

    <!-- ===========    ========= -->
    <script src="<?= url("assets/theme/js/jquery.nivo.slider.js"); ?>" type="text/javascript"></script>
    <script src="<?= url("assets/theme/js/owl.carousel.min.js"); ?>" type="text/javascript"></script>


    <!-- ===========  SCRIPT MAIN  ========= -->
    <script src="<?= url("assets/theme/js/main.js"); ?>" type="text/javascript"></script>
    <script src="<?= url("assets/theme/js/scripts.js"); ?>" type="text/javascript"></script>

    <?= $v->section("script"); ?>


</html>
