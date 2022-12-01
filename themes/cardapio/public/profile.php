<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="76x76" href="<?= asset("theme/frontend/creative-ui-kit/assets/img/apple-icon.png"); ?>">
  <link rel="icon" type="image/png" href="<?= asset("theme/frontend/creative-ui-kit/assets/img/favicon.png"); ?>">

  <link rel="stylesheet" type="text/css" t/css" href="<?= asset("assets/dist/fontawesome/css/all.min.css");?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("theme/frontend/creative-ui-kit/assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("theme/frontend/creative-ui-kit/assets/css/now-ui-kit.css?v=1.3.0"); ?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("theme/frontend/creative-ui-kit/assets/demo/demo.css"); ?>">

  <title>Perfil</title>
</head>

<body class="profile-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-primary fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="dropdown button-dropdown">
        <a href="#pablo" class="dropdown-toggle" id="navbarDropdown" data-toggle="dropdown">
          <span class="button-bar"></span>
          <span class="button-bar"></span>
          <span class="button-bar"></span>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-header">Dropdown header</a>
            <a class="dropdown-item" href="<?= asset("page/landing");?>">Home</a>
            <a class="dropdown-item" href="<?= asset("page/login");?>">login</a>
            <a class="dropdown-item" href="<?= asset("page/profile");?>">Perfil</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">One more separated link</a>
        </div>
      </div>
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/now-ui-kit/index.html" rel="tooltip" title="Designed by Invision. Coded by Creative Tim" data-placement="bottom" target="_blank">
          Now Ui Kit
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation" data-nav-image="../assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="<?= asset();?>">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= asset("page/landing");?>">landing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= asset("page/login");?>">Area restrita</a>
            </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Twitter" data-placement="bottom" href="https://twitter.com/CreativeTim" target="_blank">
              <i class="fab fa-twitter"></i>
              <p class="d-lg-none d-xl-none">Twitter</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Like us on Facebook" data-placement="bottom" href="https://www.facebook.com/CreativeTim" target="_blank">
              <i class="fab fa-facebook-square"></i>
              <p class="d-lg-none d-xl-none">Facebook</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Follow us on Instagram" data-placement="bottom" href="https://www.instagram.com/CreativeTimOfficial" target="_blank">
              <i class="fab fa-instagram"></i>
              <p class="d-lg-none d-xl-none">Instagram</p>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="wrapper">
    <div class="page-header clear-filter page-header-small" filter-color="orange">

      <div class="page-header-image" data-parallax="true"
           style="background-image:url('<?= asset("theme/frontend/creative-ui-kit/assets/img/bg5.jpg"); ?>');">
      </div>
      <div class="container">

        <div class="photo-container">
          <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/ryan.jpg"); ?>" alt="">
        </div>
        <h3 class="title">Ryan Scheinder</h3>
        <p class="category">Photographer</p>

        <div class="content">
          <div class="social-description">
            <h2>26</h2>
            <p>Comments</p>
          </div>
          <div class="social-description">
            <h2>26</h2>
            <p>Comments</p>
          </div>
          <div class="social-description">
            <h2>48</h2>
            <p>Bookmarks</p>
          </div>
        </div>
      </div>
    </div>
    <div class="section">
      <div class="container">
        <div class="button-container mt-2">
          <a href="#button" class="btn btn-primary btn-round btn-lg">Follow</a>

          <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Twitter">
            <i class="fab fa-twitter"></i>
          </a>

          <a href="#button" class="btn btn-default btn-round btn-lg btn-icon" rel="tooltip" title="Follow me on Instagram">
            <i class="fab fa-instagram"></i>
          </a>
        </div>
        <h3 class="title">About me</h3>
        <h5 class="description">An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable range.</h5>
        <div class="row">
          <div class="col-md-6 ml-auto mr-auto">
            <h4 class="title text-center">My Portfolio</h4>
            <div class="nav-align-center">
              <ul class="nav nav-pills nav-pills-primary nav-pills-just-icons" role="tablist">
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#profile" role="tablist">
                    <i class="now-ui-icons design_image"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" data-toggle="tab" href="#home" role="tablist">
                    <i class="now-ui-icons location_world"></i>
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" data-toggle="tab" href="#messages" role="tablist">
                    <i class="now-ui-icons sport_user-run"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <!-- Tab panes -->
          <div class="tab-content gallery">
            <div class="tab-pane active" id="home" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg7.jpg"); ?>" alt="" class="img-raised">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg7.jpg"); ?>" alt="" class="img-raised">
                  </div>
                  <div class="col-md-6">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg7.jpg"); ?>" alt="" class="img-raised">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg7.jpg"); ?>" alt="" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="profile" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg7.jpg"); ?>" class="img-raised">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg7.jpg"); ?>" alt="" class="img-raised">
                  </div>
                  <div class="col-md-6">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg7.jpg"); ?>" alt="" class="img-raised">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg7.jpg"); ?>" alt="" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
            <div class="tab-pane" id="messages" role="tabpanel">
              <div class="col-md-10 ml-auto mr-auto">
                <div class="row collections">
                  <div class="col-md-6">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg3.jpg"); ?>" alt="" class="img-raised">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg8.jpg"); ?>" alt="" class="img-raised">
                  </div>
                  <div class="col-md-6">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg7.jpg"); ?>" alt="" class="img-raised">
                    <img src="<?= asset("theme/frontend/creative-ui-kit/assets/img/bg6.jpg"); ?>" class="img-raised">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="footer footer-default">
      <div class=" container ">
        <nav>
          <ul>
            <li>
              <a href="https://www.creative-tim.com">
                Creative Tim
              </a>
            </li>
            <li>
              <a href="http://presentation.creative-tim.com">
                About Us
              </a>
            </li>
            <li>
              <a href="http://blog.creative-tim.com">
                Blog
              </a>
            </li>
          </ul>
        </nav>
        <div class="copyright" id="copyright">
          &copy;
          <script>
            document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
          </script>, Designed by
          <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by
          <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
        </div>
      </div>
    </footer>
  </div>
  <!--   Core JS Files   -->
  <script src="<?= asset("theme/frontend/creative-ui-kit/assets/js/core/jquery.min.js"); ?>" type="text/javascript"></script>
  <script src="<?= asset("theme/frontend/creative-ui-kit/assets/js/core/popper.min.js"); ?>" type="text/javascript"></script>
  <script src="<?= asset("theme/frontend/creative-ui-kit/assets/js/core/bootstrap.min.js"); ?>" type="text/javascript"></script>

  <script src="<?= asset("theme/frontend/creative-ui-kit/assets/js/now-ui-kit.js?v=1.3.0"); ?>" type="text/javascript"></script>
</body>

</html>