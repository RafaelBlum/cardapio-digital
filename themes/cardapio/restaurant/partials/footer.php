<a id="back-top" href="#"></a>

<footer class="footer">
    <div class="section-top art">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="block">
                        <h4>Sobre</h4>
                        <p class="footer-about">
                            <?= CONF_SITE_DESC; ?>
                        </p>
                    </div>
                </div>

                <div class="footer-col col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="block footer-col">
                        <h4 class="footer-title">Contatos</h4>
                        <p><i class="fa fa-map-marker"></i>
                            <span>Endereço | </span><?= CONF_ADDR_STREET; ?>, <?= CONF_ADDR_NUMBER; ?>
                        </p>
                        <p><i class="fa fa-phone"></i>
                            <span>Fone | </span> <?= CONF_ADDR_FONE; ?>
                        </p>
                        <p><i class="fa-solid fa-mobile-screen-button"></i>
                            <span>Celular | </span> <?= CONF_ADDR_FONE; ?>
                        </p>
                        <p><i class="fa  fa-envelope"></i>
                            Email | <span><?= CONF_ADDR_EMAIL; ?></span>
                        </p>
                    </div>
                </div>

                <div class="footer-card col-sm-12 col-md-4 col-lg-4 col-xl-4">
                    <div class="block">
                        <h4 class="footer-title">Formas de pagamento</h4>
                        <div class="media">
                            <ul class="cash-out pull-left">
                                <li>
                                    <a href="#">
                                        <img src="<?= url("storage/site/maestro.png"); ?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?= url("storage/site/maestro.png"); ?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?= url("storage/site/maestro.png"); ?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?= url("storage/site/maestro.png"); ?>" alt="">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="<?= url("storage/site/maestro.png"); ?>" alt="">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="footer-end col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center">

                    <a href="#" class="footer-title">
                        <img src="<?= url("assets/theme/images/logo/logo-cd-xl.png"); ?>"
                             width="300" alt="docitos confeitaria logo">
                    </a>

                    <ul class="share-icon">
                        <li>
                            <a class="facebook-icon" target="_blank" href="<?= CONF_URL_GITHUB ?>">
                                <i class="fab fa-github"></i>
                            </a>
                        </li>
                        <li>
                            <a class="plus-icon" target="_blank" href="<?= CONF_URL_INSTAGRAM ?>">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li>
                            <a class="twitter-icon" target="_blank" href="<?= CONF_URL_TWITTER ?>">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a class="pinterest-icon" target="_blank" href="<?= CONF_URL_YOUTUBE ?>">
                                <i class="fab fa-youtube"></i>
                            </a>
                        </li>
                        <li>
                            <a class="linkedin-icon" target="_blank" href="<?= CONF_URL_LINKEDIN ?>">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li style="display: flex; align-items: center; justify-content: center;">
                            <a class="linkedin-icon" target="_blank" href="<?= CONF_URL_LINKEDIN ?>">
                                <img src="<?= url("assets/theme/images/logo/logo100x35.png"); ?>" alt="">
                            </a>
                        </li>
                    </ul>

                    <p class="copyright-text pull-right"><?= CONF_SITE_NAME; ?> @<?= date("Y") ?> Desenvolvido por
                        <a target="_blank" href="https://github.com/RafaelBlum"><?= CONF_DEV_NAME; ?></a>
                    </p>
                </div>
            </div>
        </div>

    </div>
</footer>
