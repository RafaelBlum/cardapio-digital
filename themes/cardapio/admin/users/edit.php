<?php $v->layout("layouts/_theme"); ?>
<!-- ============================== SIDEBAR ============================== -->
<div class="app-page-title">
    <div class="page-title-wrapper">

        <!-- ======= HEADING ======= -->
        <div class="page-title-heading">
            <div class="page-title-icon">
                <i class="fa fa-user fa-icon-active"></i>
            </div>
            <div>Usuário
                <div class="page-title-subheading">
                    Administração dos usuários registrados no sistema.
                </div>
            </div>
        </div>
    </div>
</div>

<!-- ============================== SHOW USER ============================== -->
<div class="row">
    <!-- ======= LIST USERS ======= -->
    <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
        <div class="main-card mb-3 card">
            <div class="form_ajax" style="display: none"></div>
            <div class="app-page-title m-3">
                <div class="page-title-wrapper">
                    <div class="page-title-heading">
                        <img class="rounded-circle mr-2" width="80"
                             src="<?= asset("assets/admin/images/avatars/4.jpg"); ?>"
                             alt="User profile picture">
                        <div>
                            <?= $user->first_name ." ". $user->last_name ?>
                            <div class="page-title-subheading">
                                Usuário <?= $user->genre == "M" ?  mb_strtoupper("Masculino") : mb_strtoupper("Feminino"); ?>, cadastrado em <?= date('d/m/Y', strtotime($user->created_at)); ?>.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <h5 class="card-title">Cadastro</h5>


                <form class="form" name="form" action="<?= $router->route("users.update"); ?>" method="POST"
                      enctype="multipart/form-data">
                    <input value="<?= $user->id?>" name="id" type="hidden">
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Nome *</label>
                        <input required value="<?= $user->first_name?>" name="first_name" id="name" placeholder="Seu nome" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Sobrenome *</label>
                        <input required value="<?= $user->last_name?>" name="last_name" id="name2" placeholder="Seu Sobrenome" type="text" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="exampleEmail" class="">Email *</label>
                        <input value="<?= $user->email; ?>" name="email" id="exampleEmail" placeholder="Seu email" type="email" class="form-control">
                    </div>
                    <div class="position-relative form-group">
                        <label for="examplePassword" class="">Password</label>
                        <input name="password" id="examplePassword" placeholder="Senha" type="password" class="form-control">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-append">
                            <label class="input-group-text" for="inputselect">Genero</label>
                        </div>
                        <select class="custom-select" id="inputselect" name="genre">
                            <option value="" selected disabled>***** Selecione </option>
                            <?php
                                $genre = array('M', 'F');
                                foreach ($genre as $ger):
                                    if($user->genre == $ger):
                             ?>
                                    <option name="genre" value="<?= $ger;?>" selected><?= $ger == 'M'? 'Masculino' : 'Feminino'; ?></option>
                            <?php
                                    else:
                            ?>
                                <option name="genre" value="<?= $ger;?>"><?= $ger == 'M'? 'Masculino' : 'Feminino'; ?></option>
                            <?php
                                    endif;
                                endforeach;
                            ?>
                        </select>
                    </div>

                    <div class="position-relative form-group">
                        <label for="exampleText" class="">Sobre</label>
                        <textarea name="text" id="exampleText" class="form-control"></textarea>
                    </div>

                    <div class="position-relative form-group">
                        <label for="exampleFile" class="">Foto</label>
                        <input name="file" id="exampleFile" type="file" class="form-control-file">
                        <small class="form-text text-muted">
                            Insira uma imagem em seu perfil de usuário.
                        </small>
                    </div>
                    <button class="mt-1 btn btn-primary">Salvar edição</button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php $v->start("script") ?>
    <script>
        $(function () {
            $("form").submit(function (e) {
                e.preventDefault();

                var form = $(this);

                $.ajax({
                    url: form.attr("action"),
                    data: form.serialize(),
                    type: "POST",
                    dataType: "json",
                }
            }).done(function () {
                alert("done");
            });
        })
    </script>
<?php $v->end(); ?>