<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="apple-touch-icon" sizes="76x76" href="<?= asset("theme/frontend/creative-ui-kit/assets/img/apple-icon.png"); ?>">
  <link rel="icon" type="image/png" href="<?= asset("theme/frontend/creative-ui-kit/assets/img/favicon.png"); ?>">

  <link rel="stylesheet" type="text/css" href="<?= asset("assets/dist/fontawesome/css/all.min.css");?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("theme/frontend/creative-ui-kit/assets/css/bootstrap.min.css"); ?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("theme/frontend/creative-ui-kit/assets/css/now-ui-kit.css?v=1.3.0"); ?>">
  <link rel="stylesheet" type="text/css" href="<?= asset("theme/frontend/creative-ui-kit/assets/demo/demo.css"); ?>">

  <title>Login</title>
</head>

<body class="login-page sidebar-collapse">
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
                <a class="nav-link" href="<?= asset("page/admin");?>">Administrativo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= asset("page/landing");?>">landing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?= asset("page/profile");?>">Perfil</a>
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
  <div class="page-header clear-filter" filter-color="orange">
    <div class="page-header-image" style="background-image:url(<?= asset("theme/frontend/creative-ui-kit/assets/img/login.jpg"); ?>)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
            <form class="form" method="" action="">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="assets/img/now-logo.png" alt="">
                </div>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input type="text" class="form-control" placeholder="First Name...">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input type="text" placeholder="Last Name..." class="form-control" />
                </div>
              </div>
              <div class="card-footer text-center">
                <a href="#pablo" class="btn btn-primary btn-round btn-lg btn-block">Get Started</a>
                <div class="pull-left">
                  <h6>
                    <a href="#pablo" class="link">Create Account</a>
                  </h6>
                </div>
                <div class="pull-right">
                  <h6>
                    <a href="#pablo" class="link">Need Help?</a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>

    <footer class="footer">
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