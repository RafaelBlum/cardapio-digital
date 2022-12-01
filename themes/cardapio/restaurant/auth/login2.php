<?php $v->layout("restaurant/auth/_theme"); ?>

<dvi class="form-body">
    <div class="container">
        <header >
            <h1>Fazer Login</h1>
            <p>Ainda não tem conta? <a title="Cadastre-se" href="<?= url("/cadastrar"); ?>">Cadastre-se!</a></p>
        </header>

        <form action="<?= url("entrar"); ?>" method="post" enctype="multipart/form-data">

            <div class="ajax_response">
                <?= flash(); ?>
            </div>
            <?= csrf_input(); ?>

            <div class="input-field">
                <input type="email">
                <label for="username">E-mail</label>
            </div>

            <div class="input-field">
                <input type="password">
                <label for="password">Senha</label>
                <span><a title="Recuperar senha" href="<?= url("/recuperar"); ?>">Esqueceu a senha?</a></span>
            </div>

            <label class="check">
                <input type="checkbox"  <?= (!empty($cookie) ? "checked" : ""); ?> name="save"/>
                <span>Lembrar dados?</span>
            </label>

            <div class="button">
                <div class="inner"></div>
                <button>Entrar</button>
            </div>

        </form>
    </div>
</dvi>
