<div class="col-md-3">
    <div class="blog-sidebar">
        <div class="block">
            <h4>Tag categorias</h4>
            <div class="tag-link">
                <?php foreach ($categories as $category): ?>
                    <a href="#" class="list-group-item">
                        <i class="fa  fa-dot-circle-o"></i>
                        <?= $category->title; ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>

        <div class="block">
            <h4>Postagens relacionadas</h4>
            <?php if(!empty($related)): ?>
                <ul class="media-list">
                    <?php foreach ($related as $more): ?>
                        <li class="media">
                            <a class="pull-left" href="<?= url("/blog/{$more->uri}") ?>">
                                <img class="media-object" src="<?= image($more->cover, 140, 140) ?>" alt="...">
                            </a>
                            <div class="media-body">
                                <a href="<?= url("/blog/{$more->uri}") ?>" class="media-heading">
                                    <?= str_limit_chars($more->title, 60) ?></a>
                                <p><?= date_fmt($more->post_at) ?></p>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            <?php else:?>
                <p class="blog-post-body clearfix blog-post-tag">Este conteúdo não postagens relacionadas</p>
            <?php endif;?>
        </div>

    </div>
</div>
