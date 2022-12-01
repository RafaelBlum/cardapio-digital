<div class="col-sm-12 col-md-3 col-lg-3 col-xl-3">
    <div class="prod-box">


        <div class="prod-image">
            <img class="prod-img" src="<?= image($product->cover, 820, 540); ?>" alt="Produto image">
        </div>

        <h3 class="prod-label">
            <a href="<?= url("/produtos/{$product->uri}"); ?>"
               class="prod-name">
                <?= str_limit_chars($product->name, 20); ?>
            </a>

            <span class="prod-price">
                R$ <?= number_format($product->price, 2, ",", "."); ?>
            </span>
        </h3>



        <a href="<?= url("/produtos/{$product->uri}"); ?>"
           class="btn btn-success mb-3 prod-btn">
            Visualizar <i class="fas fa-chevron-right ml-3"></i>
        </a>

    </div>
</div>
