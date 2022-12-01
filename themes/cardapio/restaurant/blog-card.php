<div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mb-5">
    <div class="card justify-content-center text-center">

        <div class="card-image">
            <img src="<?= image($post->cover, 300); ?>" alt="image" class="card-img-top">
        </div>

        <div class="card-body">
            <a href="<?= url("blog/{$post->uri}") ?>" class="card-text">
                <?= str_limit_chars($post->subtitle, 70); ?>
            </a>

            <p class="mt-3">
                <code>
                    <?= date_fmt_br($post->post_at); ?>
                </code>
            </p>

        </div>

    </div>
</div>
