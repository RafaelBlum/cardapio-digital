<?php $v->layout("layouts/_theme"); ?>
<!-- ============================== SIDEBAR ============================== -->

<div class="app-page-title">
    <div class="page-title-wrapper">

        <!-- ======= HEADING ======= -->
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-user-edit fa-icon-active"></i>
            </div>
            <div>Usuário
                <div class="page-title-subheading">
                    Registro de novo usuário no sistema.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================== SHOW USER ============================== -->
<div class="row">
    <!-- ======= LIST USERS ======= -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="main-card card">

            <div class="ml-3 mt-3 mr-3">
                <div class="page-title-wrapper">
                    <div class="d-flex align-middle align-content-center align-content-between">
                        <img class="rounded-circle" width="80"
                             src="<?= asset("assets/admin/images/avatars/default.jpg"); ?>"
                             alt="User profile picture">
                         <div><h5>Cadastro de usuário</h5></div>
                    </div>
                </div>
            </div>

            <div class="card-body">

                <form class="form" name="form" action="<?= $router->route("users.store"); ?>" method="POST" enctype="multipart/form-data">

                    <div class="position-relative form-group">
                        <label for="first_name" class="">Nome *</label>
                        <input required name="first_name" id="first_name" placeholder="Nome" type="text" class="form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="last_name" class="">Sobrenome *</label>
                        <input required name="last_name" id="last_name" placeholder="Sobrenome" type="text" class="form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="email" class="">Email</label>
                        <input required name="email" id="email" placeholder="E-mail" type="email" class="form-control">
                    </div>

                    <div class="position-relative form-group">
                        <label for="password" class="">Password</label>
                        <input required name="password" id="password" placeholder="Senha" type="password" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <label class="input-group-text" for="genre">Genero *</label>
                        </div>
                        <select required class="custom-select" id="genre" name="genre">
                            <option value="" selected disabled>***** Selecione </option>
                            <option value="M">Masculino</option>
                            <option value="F">Feminino</option>
                        </select>
                    </div>

                    <div class="position-relative form-group">
                        <label for="about" class="">Sobre</label>
                        <textarea name="about" id="about" class="form-control"></textarea>
                    </div>

                    <div class="position-relative form-group">
                        <label for="avatar" class="">Foto</label>
                        <input name="avatar" id="avatar" type="file" class="form-control-file">
                        <small class="form-text text-muted">
                            Insira um avatar em seu perfil de usuário.
                        </small>
                    </div>
                    <button class="mt-1 btn btn-primary">Salvar novo usuário</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php $v->start("script") ?>
<script>
    $(function () {
        $('form').submit(function (e) {
            e.preventDefault();

            let form = $('this);

                $.ajax({
                    url: form.attr('action'),
                    data: form.serialize(),
                    type: 'POST'
                    dataType: 'json',
                    success: function () {

                    },
                    complete: function () {
                        document.getElementById("first_name").value = "";
                        document.getElementById("last_name").value = "";
                    }
                });

        });
    })
</script>
<?php $v->end(); ?>
