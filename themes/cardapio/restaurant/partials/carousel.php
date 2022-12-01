<!-- ===================================== CAROUSEL  ===================================== -->
<section class="section-carousel">
    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="first-slide slide-img" src="<?= url("storage/site/slide-8.png"); ?>" alt="First slide">

                <div class="carousel-caption d-none d-md-block">
                    <img src="<?= url("assets/theme/images/logo/logo-cd-vertical-xl.png"); ?>" alt="Logo" width="300">
                    <p class="contact-desc"><?= CONF_SITE_DESC; ?></p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="second-slide slide-img" src="<?= url("storage/site/slide-7.png"); ?>" alt="Second slide">

                <div class="carousel-caption d-none d-md-block">
                    <div class="contact-action">
                        <i class="fab fa-whatsapp"></i>
                        Faça seu pedido ou tire dúvidas <br><strong> <?= CONF_ADDR_FONE; ?></strong>
                    </div>

                    <p class="contact-btn">
                        <a class="btn-whats" href="https://api.whatsapp.com/send?phone=<?= CONF_ADDR_FONE ?>&text=<?= CONF_TEXT_WHATSAPP ?>"
                           target="_blank" role="button"><i class="fab fa-whatsapp"></i>  Peça seu orçamento</a>
                    </p>
                </div>
            </div>

            <div class="carousel-item">
                <img class="slide-img" src="<?= url("storage/site/slide-8.png"); ?>" alt="Third slide">

                <div class="third-slide carousel-caption d-none d-md-block">
                        <h1>Esperimente os delicioso salgados especiais</h1>
                        <p class="contact-desc"><?= CONF_SITE_DESC; ?></p>
                    </div>
            </div>
        </div>

        <a class="carousel-control-prev carousel-control" href="#myCarousel" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next carousel-control" href="#myCarousel" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>
