<section class="breadcrumb section-body">
        <div class="breadcrumb-title">
            <h2><?= ($title ?? "" );  ?></h2>
        </div>

        <div class="breadcrumb-navbar">
            <ol class="list">
                <li class="active">
                    <a href="<?= url("/"); ?>">Home  / </a>
                </li>
                <li class="active">
                    <?= $title; ?>
                </li>
            </ol>
        </div>
</section>
