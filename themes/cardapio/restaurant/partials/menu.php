<nav class="navbar navbar-expand-lg navbar-light bg-menu">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navMenu" aria-controls="navMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>

        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="nav-main nav navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= url("/"); ?>">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#blog">Blog</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url("produtos"); ?>">Produtos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= url("entrar"); ?>">Login</a>
                </li>
            </ul>
        </div>
    </div>

</nav>