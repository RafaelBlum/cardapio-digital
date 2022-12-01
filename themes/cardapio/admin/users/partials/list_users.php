<div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
    <div class="main-card mb-3 card">
        <div class="card-header">

            <input type="text" id="myInput" class="form-control-sm form-control mt-1 mb-1 mr-1" placeholder="Busca por usuário">

            <div class="btn-actions-pane-right">
                <div role="group" id="filter" class="btn-group-sm btn-group text-white">
                    <a class="btn btn-success" href="#"
                       data-users="<?= $users; ?>"
                       data-filter="<?= $filters; ?>"
                       data-action="<?= $router->route("users.filters"); ?>">
                        Última 5 usuários
                    </a>
                    <a class="btn btn-warning">
                        Carregar todos
                    </a>
                    <a class="btn btn-danger" href="<?= $router->route("users.pdf"); ?>" target="_blank">
                            <span class="btn-icon-wrapper pr-2">
                                <i class="far fa-file-pdf fa-w-20"></i>
                            </span>
                        PDF
                    </a>
                </div>
            </div>
        </div>
        <div class="table-responsive">

            <table class="align-middle mb-0 table table-borderless table-striped table-hover">
                <thead>
                <tr>
                    <th>Name</th>
                    <th class="text-center">Endereço</th>
                    <th class="text-center">E-mail</th>
                    <th class="text-center">Ações</th>
                </tr>
                </thead>
                <tbody id="tableUsers">
                <?php foreach ($users as $user): ?>
                    <tr>
                        <td>
                            <div class="widget-content p-0 ml-3">
                                <div class="widget-content-wrapper">
                                    <div class="widget-content-left mr-3">
                                        <div class="widget-content-left">
                                            <img width="40" class="rounded-circle" src="<?= asset("assets/admin/images/avatars/4.jpg"); ?>" alt="">
                                        </div>
                                    </div>
                                    <div class="widget-content-left flex2">
                                        <div class="widget-heading"><?= $user->first_name . " " . $user->last_name; ?></div>
                                        <div class="widget-subheading opacity-7">Web Developer</div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center">
                            Porto Alegre
                        </td>
                        <td class="text-center">
                            <?= $user->email; ?>
                        </td>
                        <td class="text-center">
                            <a type="button" href="<?= $router->route("users.profile", ["id"=> $user->id]); ?>" class="btn-sm btn-warning">
                                Detalhes
                            </a>
                            <a type="button" class="btn btn-sm btn-outline-danger" onClick="deleteDataUser(<?=$user->id;?>)">
                                Deletar
                            </a>
                            <form id="delete-user-form-<?=$user->id;?>"
                                  action="<?= $router->route("users.delete", ["id"=> $user->id]); ?>" method="POST" style="display: none;">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <div class="d-block text-center card-footer">
            <?php
            var_dump($filters);
            if(!empty($filters)): ?>
                <span>Carregamento total de <?= count($filters); ?> usuários</span>
            <?php else: ?>
                <span>Carregamento total de <?= count($users); ?> usuários</span>
            <?php endif; ?>
        </div>
    </div>
</div>

<!-- ============================== SCRIPT FILTRO ============================== -->
<?php $v->start("script"); ?>
<script type="text/javascript" src="<?= asset("assets/admin/scripts/sweetalert2.all.js"); ?>"></script>
<script type="text/javascript" src="<?= asset("assets/admin/scripts/app-sweetalert.js"); ?>"></script>
<script type="text/javascript" src="<?= asset("assets/admin/scripts/search-users.js"); ?>"></script>
<script>
    $("#filter").on("click", "[data-filter]", function (e) {


        e.preventDefault();

        let data = $(this).data();
        let div = $(this).parent(); //toda div dos botões


        $.post(data.action, data, function () {
            div.css("color", "red");
        }, "json").fail(function () {
            alert("Error!!")
        });

    });
</script>
<?php $v->end(); ?>
