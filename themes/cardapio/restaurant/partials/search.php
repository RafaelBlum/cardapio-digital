<div class="container">
    <div class="row">

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 title-box">
            <h1><?= $title; ?></h1>
        </div>

        <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 text-center form-box">
            <form class="form" name="search" action="<?= url("/blog/buscar"); ?>" method="post" enctype="multipart/form-data">
                <div class="box">

                    <button href="#" class="form-button"><i class="fa fa-search"></i></button>
                    <input class="" type="text" name="find" placeholder="Encontrar delícias..." required/>
                </div>
            </form>
        </div>
    </div>
</div>
