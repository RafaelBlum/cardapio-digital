<?php $v->layout("restaurant/auth/_theme"); ?>

<div class="container mt-5 border">
    <article class="auth" style="margin-top: 20px;">
        <article class="optin_page">
            <div class="container content">
                <div class="optin_page_content text-center">
                    <img alt="<?= $data->title; ?>" title="<?= $data->title; ?>"
                         src="<?= $data->image; ?>"/>

                    <h1><?= $data->title; ?></h1>
                    <p><?= $data->desc; ?></p>

                    <?php if(!empty($data->link)): ?>
                        <a href="<?= $data->link; ?>" title="<?= $data->linkTitle; ?>"
                           class="btn btn-primary optin_page_btn gradient gradient-green gradient-hover radius">
                            <?= $data->linkTitle; ?>
                        </a>
                    <?php endif;?>
                </div>
            </div>
        </article>
    </article>
</div>