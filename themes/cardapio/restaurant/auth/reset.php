<?php $v->layout("restaurant/auth/_theme"); ?>

<?php $v->start("styles");?>
    <style>
        .auth{
            margin: 30px;
        }

    </style>
<?php $v->end;?>

<div id="content" class="container mt-5">

    <div class="auth" id="page-content">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <header class="auth_header">
                        <h1>Criar nova senha</h1>
                        <p>Informe sua nova senha e repita a mesma para ativar.</p>
                    </header>

                    <div class="card-body">
                        <form class="auth_form" data-reset="true" action="<?= url("/recuperar/resetar") ?>" method="post" enctype="multipart/form-data">

                            <div class="ajax_response"><?= flash(); ?></div>
                            <?= csrf_input(); ?>
                            <input name="code" value="<?= $code; ?>" type="hidden">


                            <div class="form-group">
                                <label class="text-muted" for="exampleInputPassword1">Nova senha</label>
                                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Insira sua nova senha aqui">
                                <small id="passwordHelp" class="form-text text-muted">Sua senha deve ter entre 8 e 40 caracteres!</small>
                            </div>

                            <div class="form-group">
                                <label class="text-muted" for="exampleInputPassword2">Repita a nova senha</label>
                                <input name="password_re" type="password" class="form-control" id="exampleInputPassword2" placeholder="Repita a nova senha">
                                <small id="passwordHelp" class="form-text text-muted">Sua senha deve ser a mesma inserida acima!</small>
                            </div>

                            <div class="form-group">
                                <div class="form-check">
                                    <span><a title="Recuperar senha" href="<?= url("/entrar"); ?>">Voltar e entrar!</a></span>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary btn-block">Submit</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>