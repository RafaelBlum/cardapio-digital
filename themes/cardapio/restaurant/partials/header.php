<header class="section-header bg-menu">
    <div class="header">
            <div class="logo">
                <img src="<?= url("assets/theme/images/logo/logo-cd-xl.png"); ?>" alt="logo">
            </div>
            <nav class="menu">
                <ul>
                    <li><a href="<?= url("/"); ?>">Home</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="<?= url("/produtos"); ?>">Produtos</a></li>
                    <li><a href="<?= url("/entrar"); ?>">Área restrita</a></li>
                </ul>
            </nav>

            <div class="top-btn">
                <a href="https://api.whatsapp.com/send?phone=<?= CONF_ADDR_FONE ?>&text=<?= CONF_TEXT_WHATSAPP ?>"
                   target="_blank"
                   class="btn">WhatsApp <i class="fab fa-whatsapp"></i>
                </a>
            </div>
    </div>
</header>
