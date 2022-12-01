<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

    <!-- ==============================  CSS DEFAULT  ========================================================== -->
    <link rel="stylesheet" href="<?= url("assets/theme/plugins/bootstrap-4.6.1/css/bootstrap.css"); ?>" type="text/css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"/>

    <!-- =========================  CSS PERSONALIZED  ========================================================== -->
    <link rel="stylesheet" href="<?= url("assets/theme/css/style.css"); ?>" type="text/css"/>
    <link rel="stylesheet" href="<?= url("assets/theme/css/responsive.css"); ?>" type="text/css"/>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">

    <style>

    </style>
    <?= $head; ?>
</head>
<body>

<!-- ========================================  HEADER  ============================================================= -->
<?= $v->insert("restaurant/partials/carousel"); ?>

<!-- ========================================  MENU  =============================================================== -->
<?= $v->insert("restaurant/partials/header"); ?>

<div class="main">
    <style>
        @media (min-width: 992px) {
            .sm\:pt-11{
                background: #f0f2f3;
                border-radius: 5px;
                padding-top: 2.75rem;
            }
        }

        @media (min-width: 1220px)
            .container {
                max-width: 1200px;
                padding: 0px 20px;
            }
    </style>

    <!-- ================================= PRICING MENU  =========================================================== -->
    <section class="pricing section-body" id="pricing-menu">
        <div class="container">
            <div class="section-title section-top">
                <h2>Cardápio de valores</h2>
                <p class="tagline">Faça sua encomenda online agora!</p>
            </div>

            <div class="pricing-wrapper">
                <div class="single-pricing">
                    <div class="top">
                        <h4>Especiais</h4>
                        <p>O cento de docinhos e salgadinhos já são muito gostosos, mas este combo vai te dar uma
                            explosão de sabores, com os mais deliciosos e sofisticados docinhos e salgadinhos para sua
                            festa de forma especial e inesquecivel!</p>
                        <div class="price">
                            <h2 class="price"><span class="currency">R$</span>75.00</h2>
                        </div>
                    </div>
                </div>

                <div class="single-pricing active-featured">
                    <div class="top-badge">
                        Os mais pedidos
                    </div>
                    <div class="top">
                        <h4>Salgados e doces</h4>
                        <p>Este é o combo mais pedido e o chodó dos clientes que querem aquela delicia na sua festa e
                            um custo perfeito para seu bolso, com diversos tipos, como salgados assados, salgados fritos
                            e docinhos de dar água na boca de muitos sabores e estilos! </p>
                        <div class="price">
                            <h2 class="price"><span class="currency">R$</span>55.00</h2>
                        </div>
                    </div>

                </div>

                <div class="single-pricing">
                    <div class="top">
                        <h4>Bolos e tortas</h4>
                        <p>Na <?= CONF_SITE_NAME; ?> você vai encontrar deliciosas e maravilhosas tortas de diversos
                            tipos e tamanhos para sua festa. E como não falar nos incriveis bolos, né! É cada uma mais
                            delicioso e com decorações mágicas e personalizados!</p>
                    </div>
                    <div class="price">
                        <span class="sub">A partir de</span>
                        <h2 class="price sub-val"><span class="currency">R$</span>60.00</h2>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================= COUNTER ADMIN  ========================================================== -->
    <section class="section-counter section-body">
        <div class="container">
            <div class="counter-wrapper">
                <div class="single-counter">
                    <span class="counter">156</span><span class="plus-icon"><i class="far fa-heart"></i></span>
                    <p class="counter-text">
                        Clientes felizes
                    </p>
                </div>
                <div class="single-counter">
                    <span class="counter">7856</span><span class="plus-icon"><i class="fas fa-chart-line"></i></span>
                    <p class="counter-text">
                        Pedidos solicitados
                    </p>
                </div>
                <div class="single-counter">
                    <span class="counter">25</span><span class="plus-icon"><i class="fas fa-car"></i></span>
                    <p class="counter-text">
                        Aguardando entrega
                    </p>
                </div>
                <div class="single-counter">
                    <span class="counter">2000</span><span class="plus-icon"><i class="far fa-thumbs-up"></i></span>
                    <p class="counter-text">
                        Voltaram a pedir
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- ================================= SALGADOS ================================================================ -->
    <section class="products-card container" id="snacks-product">
        <div class="row">

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="section-title section-sm">
                    <h2>Salgados</h2>
                    <p class="tagline">Salgadinhos feitos com amor!</p>
                </div>
            </div>


            <?php if(!empty($snacks)): ?>
                <?php foreach ($snacks as $snack): ?>
                    <?php $v->insert("restaurant/products-card", ["product" => $snack]); ?>
                <?php endforeach; ?>
            <?php else: ?>
                <h3>Desculpe, mas os produtos estão sendo atualizado e em breve a página estará no ar!</h3>
            <?php endif; ?>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <a href="<?= url("blog"); ?>" class="btn-more" role="button">
                    <span>Veja mais...</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ================================= DOCES =================================================================== -->
    <section class="products-card container" id="candy-product">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="section-title section-sm">
                    <h2>Doces</h2>
                    <p class="tagline">Experimente essas delicias!</p>
                </div>
            </div>

            <?php if(!empty($candys)): ?>
                <?php foreach ($candys as $candy): ?>
                    <?php $v->insert("restaurant/products-card", ["product" => $candy]); ?>
                <?php endforeach; ?>
            <?php else: ?>
                <h3>Desculpe, mas os produtos estão sendo atualizado e em breve a página estará no ar!</h3>
            <?php endif; ?>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <a href="<?= url("blog"); ?>" class="btn-more" role="button">
                    <span>Veja mais...</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ================================= TORTAS E BOLOS ========================================================== -->
    <section class="products-card container" id="cakePie-product">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="section-title section-sm">
                    <h2>Tortas e bolos</h2>
                    <p class="tagline">Tortas e bolos de diversos sabores e tamanhos!</p>
                </div>
            </div>

            <?php if(!empty($cakesPies)): ?>
                <?php foreach ($cakesPies as $cakePie): ?>
                    <?php $v->insert("restaurant/products-card", ["product" => $cakePie]); ?>
                <?php endforeach; ?>
            <?php else: ?>
                <h3>Desculpe, mas os produtos estão sendo atualizado e em breve a página estará no ar!</h3>
            <?php endif; ?>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <a href="<?= url("blog"); ?>" class="btn-more" role="button">
                    <span>Veja mais...</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ================================= BLOG ==================================================================== -->
    <section class="blog-card container section-body" id="blog">
        <div class="row">
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <div class="section-title section-sm text-center">
                    <h2>Blog</h2>
                    <p class="tagline">Quer dicas para sua festa? veja nosso blog!</p>
                </div>
            </div>

            <?php if(!empty($blog)): ?>
                <?php foreach ($blog as $post): ?>
                    <?php $v->insert("restaurant/blog-card", ["post" => $post]); ?>
                <?php endforeach; ?>
            <?php else: ?>

                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                    <div class="section-title section-sm text-center">
                        <h3>Desculpe,</h3>

                        <p>O blog está sendo atualizado e em breve a página estará no ar!</p>
                    </div>
                </div>

            <?php endif; ?>

            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <a href="<?= url("blog"); ?>" class="btn-more" role="button">
                    <span>Veja mais...</span>
                </a>
            </div>
        </div>
    </section>

    <!-- ================================= SUBSCRIBE  ============================================================== -->
    <section class="subscribe m-3" id="subscribe">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 align-self-center">
                    <div class="section-title section-sm">
                        <h2> Quer receber nossas ofertas?</h2>
                        <p><i class="fab fa-whatsapp"> </i>
                            Registre seu e-mail e confira nossas ofertas
                        </p>
                    </div>
                    <form class="form">
                        <input type="email" class="form-field" placeholder="Insira seu e-mail" />
                        <button type="button" class="btn-envelop btn-primary btn-inside uppercase">
                            <i class="fa-solid fa-envelope-open"> </i>
                        </button>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <!-- =================================  EM DESENVOLVIMENTO ===================================================== -->
    <?= $v->insert("restaurant/special"); ?>

    <!-- ==================================  FOOTER  =============================================================== -->
    <?= $v->insert("restaurant/partials/footer"); ?>
</div>

</body>

<!-- =======================================  SCRIPT  ============================================================== -->
<script src="<?= url("assets/theme/js/jquery-3.6.0.min.js"); ?>" type="text/javascript"></script>
<script src="<?= url("assets/theme/js/jquery.form.js"); ?>" type="text/javascript"></script>
<script src="<?= url("assets/theme/js/jquery-ui.js"); ?>" type="text/javascript"></script>
<script src="<?= url("assets/theme/plugins/bootstrap-4.6.1/js/bootstrap.bundle.js"); ?>" type="text/javascript"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" type="text/javascript"></script>

<!-- =========== BAR SCROLL RIGTH  ========= -->
<script src="<?= url("assets/theme/js/jquery.nicescroll.js"); ?>" type="text/javascript"></script>

<!-- ===========    ========= -->
<script src="<?= url("assets/theme/js/jquery.nivo.slider.js"); ?>" type="text/javascript"></script>
<script src="<?= url("assets/theme/js/owl.carousel.min.js"); ?>" type="text/javascript"></script>

<!-- ===========  SCRIPT WAYPOINTS - COUNTER UP ========= -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Counter-Up/1.0.0/jquery.counterup.min.js"></script>

<!-- ===========  SCRIPT MAIN  ========= -->
<script src="<?= url("assets/theme/js/main.js"); ?>" type="text/javascript"></script>
<script src="<?= url("assets/theme/js/scripts.js"); ?>" type="text/javascript"></script>
<script src="<?= url("assets/theme/js/scrollreveal.min.js"); ?>"></script>
<?= $v->section("script"); ?>

</html>
