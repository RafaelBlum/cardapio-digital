<?php $v->layout("restaurant/_theme"); ?>
<style>




</style>

<!-- ===================================== POST ==================================================================== -->
<section class="blog-post section-post">
    <div class="container">

        <!-- ============================= TITLE =================================================================== -->
        <section class="page-single-title" id="title-post">
                <div class="page-breadcrumb">
                    <ol class="list">
                        <li><a href="<?= url("/"); ?>">Home / </a></li>
                        <li><a href="<?= url("/blog"); ?>">Blog / </a></li>
                        <li class="active"><?= $post->title; ?></li>
                    </ol>
                </div>
        </section>

        <!-- ============================= POST ==================================================================== -->
        <div class="row">
            <!-- =========================  BOX  =================================================================== -->
            <div class="col-sm-12 col-md-9 col-lg-9 col-lg-9 clearfix">
                <!-- =====================  CONTENT  =============================================================== -->
                <div class="post-box">
                    <img src="<?= image($post->cover, 1200); ?>" alt="Imagem da noticia">

                    <div class="post-body">
                        <h2><?= $post->title; ?></h2>
                        <div class="htmlcontent">
                            <?= $post->content;?>
                        </div>

                        <!-- =====================  DATA POST  ===================================================== -->
                        <div class="blog-post-adm">
                            <div class="block">
                                <i class="fas fa-calendar-day"></i>
                                <p><?= date_fmt_br($post->post_at); ?></p>
                            </div>
                            <div class="block">
                                <i class="fas fa-archive"></i>
                                <p><?= CONF_SITE_NAME; ?></p>
                            </div>
                            <div class="block">
                                <i class="fas fa-bookmark"></i>
                                <p>
                                    <a href="#"><?= $post->category()->title; ?></a>
                                </p>
                            </div>
                            <div class="block">
                                <i class="fas fa-comment"></i>
                                <p><span class="counter">5</span>  Comments</p>
                            </div>

                            <div class="block icon instagram">
                                <div class="tooltipx">
                                    <i class="fa fa-share-alt"></i> Instagram
                                </div>
                                <a target="_blank" href="https://twitter.com/share?ref_src=site" class="btn-share-i twitter-share-button"
                                   data-url="<?= url("/post/{$post->uri}"); ?>"
                                   data-via="<?= str_replace("@", "", CONF_SOCIAL_TWITTER_CREATOR); ?>"
                                   data-show-count="true">
                                    <i class="fab fa-instagram"></i>
                                    <span>instagram</span>
                                </a>
                            </div>
                            <div class="block icon facebook">
                                <div class="tooltipx">
                                    <i class="fa fa-share-alt"></i> Facebook
                                </div>
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?= urlencode(url("/post/{$post->uri}")); ?>"
                                   class="btn-share-f">
                                    <i class="fab fa-facebook"></i>
                                    <span>facebook</span>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- ========================= ASIDE =================================================================== -->
            <div class="col-sm-12 col-md-3 col-lg-3 col-lg-3">
                <div class="blog-sidebar">
                    <!-- =====================  CATEGORY  ===================================================== -->
                    <div class="block tags">
                        <div class="tooltipx">
                            <i class="fa fa-tags"></i>
                        </div>
                        <h4>Tag categorias</h4>
                        <div class="tag-link">
                            <?php foreach ($categories as $category): ?>
                                <a href="#" class="list-group-item">
                                    <?= $category->title; ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <!-- =====================  POST RELATED  ===================================================== -->
                    <div class="block">
                        <h4>Postagens relacionadas</h4>
                        <?php if(!empty($related)): ?>
                            <ul class="media-list">
                                <?php foreach ($related as $more): ?>
                                    <li class="media">
                                        <a class="pull-left" href="<?= url("/blog/{$more->uri}") ?>">
                                            <img class="media-object" src="<?= image($more->cover, 140, 140) ?>" alt="...">
                                        </a>
                                        <div class="media-body">
                                            <a href="<?= url("/blog/{$more->uri}") ?>" class="media-heading">
                                                <?= str_limit_chars($more->title, 50) ?>
                                            </a>
                                            <p><?= date_fmt_br($more->post_at) ?> <i class="fas fa-calendar-days"></i></p>
                                        </div>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        <?php else:?>
                            <p class="blog-post-tag">
                                Este conteúdo não postagens relacionadas
                            </p>
                        <?php endif;?>
                    </div>

                </div>
            </div>
        </div>

        <!-- ===================== COMENTARIOS ============================================================= -->
        <div class="comments-box">
            <h4><span class="counter">5</span> Comentários</h4>
            <div class="media">
                <img class="media-object pull-left" src="<?= url("assets/theme/images/logo/logo-120x35.png"); ?>" alt="...">
                <div class="media-body">
                    <h6 class="media-heading"><?= CONF_SITE_NAME; ?> <span>12 February 2013 at 2:05 am</span> <a href=""  class="pull-right">(reply)</a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sequi quibusdam voluptate perferendis veniam eveniet! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, veritatis.</p>
                </div>
            </div>


            <!-- reply -->
            <div class="media reply">
                <img class="media-object pull-left" src="<?= url("assets/theme/images/logo/logo-120x35.png"); ?>" alt="...">
                <div class="media-body">
                    <h6 class="media-heading"><?= CONF_SITE_NAME; ?> <span>12 February 2013 at 2:05 am</span> <a href=""  class="pull-right">(reply)</a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sequi quibusdam voluptate perferendis </p>
                </div>
            </div>


            <!-- reply -->
            <div class="media reply">
                <img class="media-object pull-left" src="<?= url("assets/theme/images/logo/logo-120x35.png"); ?>" alt="...">
                <div class="media-body">
                    <h6 class="media-heading"><?= CONF_SITE_NAME; ?> <span>12 February 2013 at 2:05 am</span> <a href=""  class="pull-right">(reply)</a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sequi quibusdam voluptate perferendis </p>
                </div>
            </div>


            <!-- media -->
            <div class="media">
                <img class="media-object pull-left" src="<?= url("assets/theme/images/logo/logo-120x35.png"); ?>" alt="...">
                <div class="media-body">
                    <h6 class="media-heading"><?= CONF_SITE_NAME; ?> <span>12 February 2013 at 2:05 am</span> <a href=""  class="pull-right">(reply)</a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sequi quibusdam voluptate perferendis veniam eveniet! Lorem ipsum dolor sit amet, consectetur adipisicing elit. Perspiciatis, veritatis.</p>
                </div>
            </div>

            <!-- reply -->
            <div class="media reply">
                <img class="media-object pull-left" src="<?= url("assets/theme/images/logo/logo-120x35.png"); ?>" alt="...">
                <div class="media-body">
                    <h6 class="media-heading"><?= CONF_SITE_NAME; ?> <span>12 February 2013 at 2:05 am</span> <a href=""  class="pull-right">(reply)</a></h6>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore, sequi quibusdam voluptate perferendis </p>
                </div>
            </div>
        </div>
    </div>

</section>




<!-- ===================================== SCRIPT ================================================================== -->
<!-- ===========    REFAZER BOTÃO DE COMPARTILHAMENTO FACEBOOK DEVELOPER FACEBOOK   ============================= -->
<?php $v->start("scripts"); ?>
    <div id="fb-root"></div>

    <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>


    <script>
        (function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = 'https://connect.facebook.net/pt_BR/sdk.js#xfbml=1&version=v3.1&appId=267654637306249&autoLogAppEvents=1';
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
<?php $v->end(); ?>