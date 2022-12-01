<!doctype html>
<html lang="pt-br">

<?= $v->insert("layouts/partials/head");?>

<body>
<!--================= CARREGAMENTO =================-->
<div class="loader_bg">
    <div class="loader"></div>
</div>

<!-- ====================== BACKGROUND BODY ======================== -->
    <div class="app-container app-theme-white body-tabs-shadow fixed-sidebar fixed-header">

        <!-- ====================== NAVBAR ======================== -->
        <?=  $v->insert("layouts/partials/navbar");?>

        <!-- ====================== LAYOUT OPTIONS ======================== -->
        <?=  $v->insert("layouts/partials/options");?>

        <!-- ============================== MAIN ============================== -->
        <div class="app-main">
            <!-- =================== SIDEBAR SCROLLBAR LEFT ======================= -->
            <?=  $v->insert("layouts/partials/sidebar");?>

            <!-- ============================== MAIN CONTENT ============================== -->
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <?= $v->section("content"); ?>
                </div>
        <!-- ============================== FOOTER ============================== -->
               <?=  $v->insert("layouts/partials/footer");?>
            </div>
        </div>
    </div>

    <script src="<?= asset("assets/dist/js/jquery.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= asset("assets/dist/js/popper.min.js"); ?>" type="text/javascript"></script>
    <script src="<?= asset("assets/dist/css/bootstrap.min.js"); ?>" type="text/javascript"></script>
    <script type="text/javascript" src="<?= asset("assets/admin/scripts/main.js"); ?>"></script>
    <script>
        setTimeout(function () {
            $('.app-container').fadeOut(10);
            $('.loader_bg').fadeToggle(1000);
            $('.app-container').fadeIn(800);
        }, 1000);
    </script>
    <?= $v->section("script"); ?>
</body>
</html>
