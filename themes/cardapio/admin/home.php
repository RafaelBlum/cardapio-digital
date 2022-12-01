<?php $v->layout("layouts/_theme"); ?>

<!-- ============================== SIDEBAR ============================== -->
<div class="app-page-title">
    <div class="page-title-wrapper">

        <!-- ======= HEADING ======= -->
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-chart-pie fa-icon-active"></i>
            </div>
            <div>Analise administrativa
                <div class="page-title-subheading">
                    Página administrativa geral do sistema.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================== BUTTON TOP ============================== -->
<div class="row">
    <!-- ======= BTN 1 ======= -->
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-midnight-bloom">
               <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Usuários</div>
                    <div class="widget-subheading">Total geral no sistema</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span><?= count($users) ?></span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= BTN 2 ======= -->
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-arielle-smile">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Clients</div>
                    <div class="widget-subheading">Total Clients Profit</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>$ 568</span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= BTN 3 ======= -->
    <div class="col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-grow-early">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Followers</div>
                    <div class="widget-subheading">People Interested</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-white"><span>46%</span></div>
                </div>
            </div>
        </div>
    </div>

    <!-- ======= BTN 4 MOBILE ======= -->
    <div class="d-xl-none d-lg-block col-md-6 col-xl-4">
        <div class="card mb-3 widget-content bg-premium-dark">
            <div class="widget-content-wrapper text-white">
                <div class="widget-content-left">
                    <div class="widget-heading">Products Sold</div>
                    <div class="widget-subheading">Revenue streams</div>
                </div>
                <div class="widget-content-right">
                    <div class="widget-numbers text-warning"><span>$14M</span></div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================== LIST USERS ============================== -->
<div class="row">
    <!-- ======= LIST USERS ======= -->
    <?=  $v->insert("users/partials/list_users");?>
</div>
<?= $v->section("script"); ?>
