<?php $v->layout("layouts/_theme"); ?>
<!-- ============================== SIDEBAR ============================== -->
<div class="app-page-title">
    <div class="page-title-wrapper">

        <!-- ======= HEADING ======= -->
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-user fa-icon-active"></i>
            </div>
            <div>Listagem de usuários
                <div class="page-title-subheading">
                    Administração dos usuários registrados no sistema.
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
