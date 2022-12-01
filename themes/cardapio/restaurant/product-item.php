<?php $v->layout("restaurant/_theme"); ?>

<!-- ===========    BREAD_CRUMBS   ========================================================== -->
<section id="topic-header">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h1><?= $product->name; ?></h1>
                <p>Detalhes sobre o produto</p>
            </div>
            <div class="col-md-8 hidden-xs">
                <ol class="breadcrumb pull-right">
                    <li><a href="<?= url("/"); ?>">Home</a></li>
                    <li><a href="<?= url("/produtos"); ?>">Produtos</a></li>
                    <li class="active"><?= $product->name; ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>

<!-- ===========    PRODUCT   ========================================================== -->
<section id="single-product" class="section-body">
    <div class="container">
        <div class="row">

            <!-- ======   PRODUCT   ====== -->
            <div class="col-md-9">
                <div class="row m-3">
                    <div class="col-md-12">
                        <div class="single-product-img">
                            <img src="<?= image($product->cover, 720); ?>" alt="" width="100%">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="block">
                            <div class="product-des">
                                <h4>Ingredientes</h4>
                                <p class="price">R$ <?= number_format($product->price, 2, ",", "."); ?></p>
                                <h4><?= $product->ingredient; ?></h4>

                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- ======   DESCRIPTION PRODUCT ASIDE   ====== -->
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
        </div>

    </div>
</section>

