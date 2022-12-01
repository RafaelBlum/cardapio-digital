<?php $v->layout("restaurant/auth/_theme"); ?>

<div class="container mt-5 border">
    <article class="auth" style="margin-top: 20px; padding-bottom: 25px;">
        <header class="auth_header">
            <h1>Recuperar senha</h1>
            <p>Informe seu e-mail para receber um link de recuperação.</p>
        </header>

        <form class="auth_form" data-reset="true" action="<?= url("/recuperar") ?>" method="post" enctype="multipart/form-data">
            <div class="ajax_response"><?= flash(); ?></div>
            <?= csrf_input(); ?>

            <label>
                <div class="unlock-alt">
                    <span class="icon-envelope">Email:</span>
                    <span><a title="Recuperar senha" href="<?= url("/entrar"); ?>">Voltar e entrar!</a></span>
                </div>
                <input type="email" name="email" placeholder="Informe seu e-mail:" required/>
            </label>

            <button class="auth_form_btn transition gradient gradient-green gradient-hover">Recuperar</button>
        </form>
    </article>
</div>