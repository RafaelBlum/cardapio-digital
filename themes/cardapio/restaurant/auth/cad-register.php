<?php $v->layout("restaurant/auth/_theme"); ?>

<div class="container">
    <main role="row" class="auth mt-5 border">
        <div class="col-md-12">
            <div class="container form-signin auth_content container content" style="margin-top: 20px;">

                <form class="auth_form" action="<?= url("cadastrar"); ?>" method="POST" enctype="multipart/form-data">
                        <div class="ajax_response"><?= flash(); ?></div>
                        <?= csrf_input(); ?>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="first_name" class="form-control" placeholder="Nome" type="text">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-user"></i> </span>
                            </div>
                            <input name="last_name" class="form-control" placeholder="Sobrenome" type="text">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fa fa-envelope"></i> </span>
                            </div>
                            <input name="email" class="form-control" placeholder="Email" type="email">
                        </div>

                        <div class="input-group input-group-sm mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text"> <i class="fas fa-lock"></i> </span>
                            </div>
                            <input name="password" class="form-control" placeholder="Senha" type="password">
                        </div>

                        <p class="text-center">Você já tem uma conta? <a href="<?= url("/entrar"); ?>">Login</a> </p>
                        <button class="auth_form_btn transition btn-primary gradient gradient-green gradient-hover">Criar conta</button>
                    </form>

            </div>
        </div>
    </main>
</div>
