<?php $v->layout("restaurant/_theme"); ?>

<!-- ======================================  LOADER  =============================================================== -->
<?= $v->insert("restaurant/partials/loader-forms"); ?>



<!-- ======================================  FORM SEARCH PRODUCTS  ================================================= -->
<section id="form-search">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center form-box">
                <form class="form" name="search" action="<?= url("/products/buscar"); ?>" method="post" enctype="multipart/form-data">
                    <div class="form-content">
                        <button href="#" class="form-button"><i class="fa fa-search"></i></button>
                        <input class="" type="text" name="find" placeholder="Encontrar delícias..." required/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- ========================================  PRODUCTS  =========================================================== -->
<section class="products">
    <div class="container">

        <!-- ======================================  BREAD_CRUMBS  ================================================= -->
        <?= $v->insert("restaurant/partials/breadcrumbs"); ?>


        <?php if(empty($products) && !empty($search)): ?>
            <section class="painel-search section-sm">
                <div class="painel text-center">
                    <h3>Sua pesquisa não retornou resutados :/</h3>

                    <p>Você pesquisou por
                        <b><?= ($search ?? "" ) ?></b>. Tente outros termos.
                    </p>

                    <a href="<?= url("/produtos"); ?>" class="btn-more" role="button">
                        <span>Voltar aos produtos</span>
                    </a>
                </div>
            </section>
        <?php elseif (empty($products)): ?>
            <section class="section-sm page-title">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 clearfix m-auto">

                            <h3>Ainda estamos trabalhando aqui!</h3>

                            <p>Em breve teremos novos produtos para você!</p>

                            <a class="btn btn-main-sm mt-5" href="<?= url("/"); ?>">Voltar ao home</a>
                        </div>
                    </div>
                </div>
            </section>
        <?php else: ?>
            <section class="products-card">
                <div class="row">
                    <?php if(!empty($products)):  ?>
                        <?php foreach ($products as $product): ?>
                            <?php $v->insert("restaurant/products-card", ["product" => $product]); ?>
                        <?php endforeach; ?>
                    <?php endif; ?></div>


                <div class="pagination-nav">
                    <?= $paginator; ?>
                </div>
            </section>
        <?php endif; ?>

        <!-- =================================  ESPECIAIS ============================================== -->
        <?= $v->insert("restaurant/special"); ?>
    </div>
</section>