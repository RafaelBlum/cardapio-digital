<!DOCTYPE html>
<html lang="pt-br">
<!--
    =========================================================
    * name project CMS WEBSITE BLOG
    =========================================================
    * Product Page: https://corporatix.com.br
    * Copyright 2021
    * Licensed under MIT (https://github.com/DashboardPack/architectui-html-theme-free)
    =========================================================
    * This project aims to develop skills in PHP, web development using best practices and following psr-4.
    * Increased backend skills and improved frontend.
    * pt_BR: Este projeto tem como objetivo o desenvolvimento das habilidades em PHP, desenvolvimento web utilizando as melhores praticas
    * e seguindo a psr-4. Aumento das habilidades backend e melhora do frontend.
    -->
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="76x76" href="<?= asset("assets/public/img/apple-icon.png"); ?>">
  <link rel="icon" type="image/png" href="<?= asset("assets/public/img/favicon.png"); ?>">

  <link rel="stylesheet" type="text/css" t/css" href="<?= asset("assets/dist/fontawesome/css/all.min.css");?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("assets/dist/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("assets/css/style.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("assets/public/css/now-ui-kit.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("assets/public/demo/demo.css"); ?>">

    <?= $head;?>
</head>

<body class="landing-page sidebar-collapse">

<!--================= CARREGAMENTO =================-->
<div class="loader_bg">
    <div class="loader"></div>
</div>

<!-- ====================== NAVBAR ======================== -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="365">
    <div class="container">

      <!-- ====================== MENUS LEFT ======================== -->
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Menu</a>
          <a class="dropdown-item" href="<?= $router->route("home.home") ?>">Home</a>
          <a class="dropdown-item" href="<?= asset("page/login");?>">login</a>
          <a class="dropdown-item" href="<?= asset("page/profile");?>">Perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="<?= $router->route("admin.admin") ?>">AdministraçãoX</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Logout</a>
        </div>
      </div>

        <!-- ====================== LOGO NAME NAVBAR ======================== -->
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
          CMS WEBSITE BLOG
        </a>


       <!-- ====================== MENU MOBILE RESPONSIVE ======================== -->
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>

        <!-- ====================== MENU NAVBAR ======================== -->
      <div class="collapse navbar-collapse justify-content-end" id="navigation"
           data-nav-image='<?= asset("assets/public/img/blurred-image-1"); ?>'>
        <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" href="<?= $router->route("home.home") ?>">Home</a>
          </li>
          <li class="nav-item">
             <a class="nav-link" href="<?= $router->route("admin.admin") ?>">Administrativo</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= $router->route("home.coming");?>">Coming</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?= $router->route("home.templete");?>">Templete</a>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?= asset("page/profile");?>">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Siga no Twitter" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-github"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Curta no Facebook" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Siga no Instagram" data-placement="bottom" href="#" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- ====================== MAIN ======================== -->
  <div class="wrapper">

      <!-- ====================== BANNER TOPO ======================== -->
    <div class="page-header clear-filter page-header-small">
      <div class="page-header-image" data-parallax="true" style="background-image: url('<?= asset("assets/public/img/bg11.jpg"); ?>');"></div>
      <div class="content-center">
        <div class="container">
          <h1 class="title">CMS Webesite PHP</h1>
          <span class="m-2">Sistema gerenciador de conteúdo</span>
          <div class="text-center">
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-facebook-square"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-github"></i>
            </a>
            <a href="#pablo" class="btn btn-primary btn-icon btn-round">
              <i class="fab fa-instagram"></i>
            </a>
          </div>
        </div>
      </div>
    </div>

      <!-- ====================== SECTION ONE ======================== -->
    <div class="section section-about-us">
      <div class="container">

        <div class="row">
          <div class="col-md-8 ml-auto mr-auto text-center">
            <h2 class="title">Quem somos?</h2>
            <h5 class="description">According to the National Oceanic and Atmospheric Administration, Ted, Scambos, NSIDClead scentist, puts the potentially record low maximum sea ice extent tihs year down to low ice extent in the Pacific and a late drop in ice extent in the Barents Sea.</h5>
          </div>
        </div>

        <div class="separator separator-primary"></div>

        <div class="section-story-overview">
          <div class="row">
            <div class="col-md-6">
              <div class="image-container image-left" style="background-image: url('<?= asset("assets/public/img/login.jpg"); ?>')">
                <!-- First image on the left side -->
                <p class="blockquote blockquote-primary">"Over the span of the satellite record, Arctic sea ice has been declining significantly, while sea ice in the Antarctichas increased very slightly"
                  <br>
                  <br>
                  <small>-NOAA</small>
                </p>
              </div>
              <!-- Second image on the left side of the article -->
              <div class="image-container" style="background-image: url('<?= asset("assets/public/img/bg3.jpg"); ?>')"></div>
            </div>
            <div class="col-md-5">
              <!-- First image on the right side, above the article -->
              <div class="image-container image-right" style="background-image: url('<?= asset("assets/public/img/bg1.jpg"); ?>')"></div>
              <h3>So what does the new record for the lowest level of winter ice actually mean</h3>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
              <p>
                For a start, it does not automatically follow that a record amount of ice will melt this summer. More important for determining the size of the annual thaw is the state of the weather as the midnight sun approaches and temperatures rise. But over the more than 30 years of satellite records, scientists have observed a clear pattern of decline, decade-by-decade.
              </p>
              <p>The Arctic Ocean freezes every winter and much of the sea-ice then thaws every summer, and that process will continue whatever happens with climate change. Even if the Arctic continues to be one of the fastest-warming regions of the world, it will always be plunged into bitterly cold polar dark every winter. And year-by-year, for all kinds of natural reasons, there’s huge variety of the state of the ice.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- ====================== SECTION TWO ======================== -->
    <div class="section section-team text-center">
      <div class="container">
        <h2 class="title">Time de desenvolvimento</h2>
        <div class="team">
          <div class="row">
            <div class="col-md-4">
              <div class="team-player">
                <img src='<?= asset("assets/public/img/avatar.jpg"); ?>' alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">Romina Hadid</h4>
                <p class="category text-primary">Model</p>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-instagram"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-facebook-square"></i></a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src='<?= asset("assets/public/img/ryan.jpg"); ?>' alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">Ryan Tompson</h4>
                <p class="category text-primary">Designer</p>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-linkedin"></i></a>
              </div>
            </div>
            <div class="col-md-4">
              <div class="team-player">
                <img src='<?= asset("assets/public/img/eva.jpg"); ?>' alt="Thumbnail Image" class="rounded-circle img-fluid img-raised">
                <h4 class="title">Eva Jenner</h4>
                <p class="category text-primary">Fashion</p>
                <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some
                  <a href="#">links</a> for people to be able to follow them outside the site.</p>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-google-plus"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-youtube"></i></a>
                <a href="#pablo" class="btn btn-primary btn-icon btn-round"><i class="fab fa-twitter"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- ====================== SECTION THREE ======================== -->
    <div class="section section-contact-us text-center">
      <div class="container">
        <h2 class="title">Entre em contato conosco</h2>
        <p class="description">Your project is very important to us.</p>
        <div class="row">
          <div class="col-lg-6 text-center col-md-8 ml-auto mr-auto">
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons users_circle-08"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Seu nome...">
            </div>
            <div class="input-group input-lg">
              <div class="input-group-prepend">
                <span class="input-group-text">
                  <i class="now-ui-icons ui-1_email-85"></i>
                </span>
              </div>
              <input type="text" class="form-control" placeholder="Email...">
            </div>
            <div class="textarea-container">
              <textarea class="form-control" name="name" rows="4" cols="80" placeholder="Descreva sua mensagem..."></textarea>
            </div>
            <div class="send-button">
              <a href="#pablo" class="btn btn-primary btn-round btn-block btn-lg">Enviar mensagem</a>
            </div>
          </div>
        </div>
      </div>
    </div>

      <!-- ====================== FOOTER ======================== -->

      <footer class="container-fluid">
          <div class="container">
              <div class="row pt-5 d-flex justify-content-center" style="width: 100vm;">

                  <!--=================  =================-->
                  <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                      <div class="d-flex align-items-center justify-content-start">
                          <div class="d-flex justify-content-center borda-circula">
                              <i class="far fa-play-circle icon fa-1x"></i>
                          </div>
                          <div id="sobre" class="text-center">Sobre <?= SITE; ?></div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-user-astronaut"></i>
                          </div>
                          <div>Este repositório tem como objetivo demonstrar os conceitos basico da orientação a objeto com Php
                              , com exemplos do 3 pelares principais e por fim um projeto final com todos conceitos.
                          </div>
                      </div>
                  </div>

                  <!--=================  =================-->
                  <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                      <div class="d-flex align-items-center justify-content-start">
                          <div class="d-flex justify-content-center borda-circula">
                              <i class="far fa-list-alt icon fa-1x"></i>
                          </div>
                          <div class="text-center">CRUD Users</div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-arrow-alt-circle-right"></i>
                          </div>
                          <div><a href="<?= asset("users/criar");?>">Method create from user</a></div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-arrow-alt-circle-right"></i>
                          </div>
                          <div><a href="<?= asset("users");?>">Method read from user</a></div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-arrow-alt-circle-right"></i>
                          </div>
                          <div><a href="<?= asset("users/atualizar");?>">Method upDate from user</a></div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-arrow-alt-circle-right"></i>
                          </div>
                          <div><a href="<?= asset("users/deletar");?>">Method delete from user</a></div>
                      </div>
                  </div>

                  <!--=================  =================-->
                  <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                      <div class="d-flex align-items-center justify-content-start">
                          <div class="d-flex justify-content-center borda-circula">
                              <i class="fas fa-sticky-note icon fa-1x"></i>
                          </div>
                          <div class="text-center">Assuntos</div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-user-astronaut"></i>
                          </div>
                          <div>Template desenvolvido com Bootstrap 4</div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-user-astronaut"></i>
                          </div>
                          <div>Miniatura de imagens com Cropper</div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-user-astronaut"></i>
                          </div>
                          <div>Abstraindo SEO e SMO on page com Optimize</div>
                      </div>
                  </div>

                  <!--=================  =================-->
                  <div class="col-sm-12 col-md-3 col-lg-3 col-xl-3 mb-3">
                      <div class="d-flex align-items-center justify-content-start">
                          <div class="d-flex justify-content-center borda-circula">
                              <i class="fas fa-grip-vertical icon fa-1x"></i>
                          </div>
                          <div class="text-center">Topicos</div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-mail-bulk"></i>
                          </div>
                          <div><a href="<?= asset("mail");?>" class="text-white">Envio de e-mails com PHPMailer</a></div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-plus-circle"></i>
                          </div>
                          <div><a href="<?= asset("users/add");?>" class="text-white">Generate register users</a></div>
                      </div>

                      <div class="d-flex align-items-start justify-content-start mt-3">
                          <div class="mr-2">
                              <i class="fas fa-plus-circle"></i>
                          </div>
                          <div><a href="<?= asset("posts");?>" class="text-white">Generate register posts</a></div>
                      </div>
                  </div>
              </div>


              <hr class="my-4">

              <div class="row">
                  <!--=================  =================-->
                  <div class="col-sm-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-between text-white">
                      <div><p><?= SITE; ?> &copy;<script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script></p></div>
                      <div>Designed and Coded by<a href="#" target="_blank"> Rafael Blum</a>.</div>
                  </div>
              </div>
          </div>
      </footer>
  </div>
    <!-- ====================== CORE JS ======================== -->
  <script src="<?= asset("assets/public/js/core/jquery.min.js"); ?>" type="text/javascript"></script>
  <script src="<?= asset("assets/public/js/core/popper.min.js"); ?>" type="text/javascript"></script>
  <script src="<?= asset("assets/public/js/core/bootstrap.min.js"); ?>" type="text/javascript"></script>
  <script src="<?= asset("assets/public/js/now-ui-kit.js"); ?>" type="text/javascript"></script>
</body>
<script>
    setTimeout(function () {
        $('.app-container').fadeOut(10);
        $('.loader_bg').fadeToggle(1000);
        $('.app-container').fadeIn(800);
    }, 1000);
</script>
</html>