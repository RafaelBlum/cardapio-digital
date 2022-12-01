<?php $v->layout("layouts/_theme"); ?>
<style>
    body {
        background-color: #f9f9fa
    }

    .padding {
        padding: 3rem !important
    }

    .user-card-full {
        overflow: hidden
    }

    .card {
        border-radius: 5px;
        -webkit-box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        box-shadow: 0 1px 20px 0 rgba(69, 90, 100, 0.08);
        border: none;
        margin-bottom: 30px
    }

    .m-r-0 {
        margin-right: 0px
    }

    .m-l-0 {
        margin-left: 0px
    }

    .user-card-full .user-profile {
        border-radius: 5px 0 0 5px
    }

    .bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
        background: linear-gradient(to right, #ee5a6f, #f29263);
        border-radius: 5px;
    }

    .user-profile {
        padding: 10px 0
    }

    .card-block {
        padding: 1.25rem
    }

    .m-b-25 {
        margin-bottom: 25px
    }

    .img-radius {
        border-radius: 5px
    }

    h6 {
        font-size: 14px
    }

    .card .card-block p {
        line-height: 25px
    }

    @media only screen and (min-width: 1400px) {
        p {
            font-size: 14px
        }
    }

    .card-block {
        padding: 1.25rem
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .card .card-block p {
        line-height: 25px
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .text-muted {
        color: #919aa3 !important
    }

    .b-b-default {
        border-bottom: 1px solid #e0e0e0
    }

    .f-w-600 {
        font-weight: 600
    }

    .m-b-20 {
        margin-bottom: 20px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .p-b-5 {
        padding-bottom: 5px !important
    }

    .m-b-10 {
        margin-bottom: 10px
    }

    .m-t-40 {
        margin-top: 20px
    }

    .user-card-full .social-link li {
        display: inline-block
    }

    .user-card-full .social-link li a {
        font-size: 20px;
        margin: 0 10px 0 0;
        -webkit-transition: all 0.3s ease-in-out;
        transition: all 0.3s ease-in-out
    }

    .online{
        border-radius: 50%;
        padding: 4px;
        margin: 8px;
        border: 6px #ffffff solid;
    }

</style>

<!-- ============================== SIDEBAR ============================== -->
<div class="app-page-title">
    <div class="page-title-wrapper">

        <!-- ======= HEADING ======= -->
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-user fa-icon-active"></i>
            </div>
            <div>Perfil
                <div class="page-title-subheading">
                    Informações sobre o usuário registrado no sistema em <?= date('d/m/Y', strtotime($user->created_at)); ?>.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================== SHOW USER ============================== -->
<div class="row">
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center p-3">
        <div class="form_ajax" style="display: none"></div>
        <div class="col-sm-12 col-md-4 bg-c-lite-green user-profile">
            <div class="card-block text-center text-white border-light">
                <div class="m-b-25">
                    <img src="<?= asset("assets/admin/images/avatars/4.jpg"); ?>" class="online rounded-circle" width="150" alt="User-Profile-Image">
                </div>
                <h6 class="f-w-600"><?= $user->first_name ." ". $user->last_name ?></h6>
                <p><?= date('d/m/Y', strtotime($user->created_at)); ?></p>
                <i class="mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                    <a type="button" href="<?= $router->route("users.edit", ["id"=>$user->id]); ?>" class="text-white mb-2 mr-2 btn-transition btn btn-outline-light">
                        Editar
                    </a>
            </div>
        </div>
        <div class="col-sm-12 col-md-8 ">
            <div class="card-block">
                <h6 class="m-b-20 p-b-5 b-b-default f-w-600"><?= $user->first_name ." ". $user->last_name ?></h6>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Email</p>
                        <h6 class="text-muted f-w-400"><?= $user->email; ?></h6>
                    </div>
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Status</p>
                        <h6 class="text-muted f-w-400">Ativo</h6>
                    </div>
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Profissão</p>
                        <h6 class="text-muted f-w-400">Web Designer</h6>
                    </div>
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Genero</p>
                        <h6 class="text-muted f-w-400"><?= $user->genre == "M" ? "Masculino":"Feminino";?></h6>
                    </div>
                </div>
                <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600">Endereço</h6>
                <div class="row">
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Recent</p>
                        <h6 class="text-muted f-w-400"><?= $user->first_name ." ". $user->last_name ?></h6>
                    </div>
                    <div class="col-sm-6">
                        <p class="m-b-10 f-w-600">Most Viewed</p>
                        <h6 class="text-muted f-w-400"><?= $user->first_name ." ". $user->last_name ?></h6>
                    </div>
                </div>
                <ul class="social-link list-unstyled m-t-40 m-b-10">
                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                    <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!-- ============================== CONTENT ... ============================== -->
<div class="row">
    
</div>
