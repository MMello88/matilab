<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Continue | Matilab </title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="Matheus de Mello">
    <meta property="og:locale" content="pt_BR">
    <meta name="description" content="Gerencie seu tempo, seus projetos e sua vida.">
    <meta property="og:description" content="Gerencie seu tempo, seus projetos e sua vida.">
    <link rel="canonical" href="http://matilab.com.br">
    <meta property="og:url" content="http://matilab.com.br">
    <meta property="og:site_name" content="Matilab - Seu Gerenciamento seu tempo!">
    <script type="application/ld+json">
      {
        "name": "Matilab - Seu Gerenciamento seu tempo!",
        "description": "Gerencie seu tempo, seus projetos e sua vida.",
        "author":
        {
          "@type": "Matheus",
          "name": "Matheus de Mello"
        },
        "@type": "WebSite",
        "url": "",
        "headline": "Sign In",
        "@context": "http://schema.org"
      }
    </script><!-- End SEO tag -->
    <script>
      var base_url = "<?= base_url(); ?>";
    </script>
    <!-- FAVICONS -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url_assets("assets/apple-touch-icon.png") ?>">
    <link rel="shortcut icon" href="<?= base_url_assets("assets/favicon.ico") ?>">
    <meta name="theme-color" content="#3063A0"><!-- End FAVICONS -->
    <!-- GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End GOOGLE FONT -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url_assets("assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css") ?>">
    <link rel="stylesheet" href="<?= base_url_assets("assets/vendor/fontawesome/css/all.css") ?>"><!-- END PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url_assets("assets/vendor/toastr/toastr.min.css") ?>"><!-- END PLUGINS STYLES -->
    <!-- BEGIN THEME STYLES -->
    <link rel="stylesheet" href="<?= base_url_assets("assets/stylesheets/theme.min.css") ?>" data-skin="default">
    <link rel="stylesheet" href="<?= base_url_assets("assets/stylesheets/theme-dark.min.css") ?>" data-skin="dark">
    <link rel="stylesheet" href="<?= base_url_assets("assets/stylesheets/custom.css") ?>"><!-- Disable unused skin immediately -->
    <script> var skin = localStorage.getItem('skin') || 'default';
    var unusedLink = document.querySelector('link[data-skin]:not([data-skin="'+ skin +'"])');

    unusedLink.setAttribute('rel', '');
    unusedLink.setAttribute('disabled', true);
    </script><!-- END THEME STYLES -->
  </head>
  <body>
    <!-- .app -->
    <div class="app">
      <!--[if lt IE 10]>
      <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
      <![endif]-->
      <!-- .app-header -->
      <header class="app-header app-header-dark">
        <!-- .top-bar -->
        <div class="top-bar">
          <!-- .top-bar-brand -->
          <div class="top-bar-brand">
            <a href="<?= base_url() ?>"><img src="<?= base_url_assets("assets/images/brand-inverse.png") ?>" alt="" style="height: 32px;width: auto;"></a>
          </div><!-- /.top-bar-brand -->
          <!-- .top-bar-list -->
          <div class="top-bar-list">
            <!-- .top-bar-item -->
            <div class="top-bar-item px-2 d-md-none d-lg-none d-xl-none">
              <!-- toggle menu -->
              <button class="hamburger hamburger-squeeze" type="button" data-toggle="aside" aria-label="toggle menu"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button> <!-- /toggle menu -->
            </div><!-- /.top-bar-item -->
            <!-- .top-bar-item -->
            
            <!-- .top-bar-item -->
            <div class="top-bar-item top-bar-item-right px-0 d-none d-sm-flex">
              <!-- .nav -->
              <ul class="header-nav nav">
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-pulse"></span></a>
                  <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <h6 class="dropdown-header stop-propagation">
                      <span>Activities <span class="badge">(2)</span></span>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?= base_url_assets("assets/images/avatars/uifaces15.jpg") ?>" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="text"> Tornou-se membro do MatiLab </p><span class="date"><?= date("d/m/Y",strtotime($_usuario->dt_cadastro)) ?></span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
                <!-- .nav-item -->
                <li class="nav-item dropdown header-nav-dropdown has-notified">
                  <a class="nav-link" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="oi oi-envelope-open"></span></a>
                  <div class="dropdown-arrow"></div><!-- .dropdown-menu -->
                  <div class="dropdown-menu dropdown-menu-rich dropdown-menu-right">
                    <h6 class="dropdown-header stop-propagation">
                      <span>Messages</span>
                    </h6><!-- .dropdown-scroll -->
                    <div class="dropdown-scroll perfect-scrollbar">
                      <!-- .dropdown-item -->
                      <a href="#" class="dropdown-item unread">
                        <div class="user-avatar">
                          <img src="<?= base_url_assets("assets/images/avatars/team1.jpg") ?>" alt="">
                        </div>
                        <div class="dropdown-item-body">
                          <p class="subject"> Seja Bem-Vindo </p>
                          <p class="text text-truncate"> Felicitações <?= $_usuario->nome ?> </p><span class="date"><?= date("d/m/Y",strtotime($_usuario->dt_cadastro)) ?></span>
                        </div>
                      </a> <!-- /.dropdown-item -->
                    </div><!-- /.dropdown-scroll -->
                  </div><!-- /.dropdown-menu -->
                </li><!-- /.nav-item -->
              </ul><!-- /.nav -->
              <!-- .btn-account -->
              <div class="dropdown">
                <button class="btn-account d-none d-md-flex" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="user-avatar user-avatar-md"><img src="<?= base_url_assets("assets/images/avatars/profile.jpg") ?>" alt=""></span> <span class="account-summary pr-lg-4 d-none d-lg-block"><span class="account-name"><?= $_usuario->nome ?></span> <span class="account-description"><?= $_usuario->super_usuario ?></span></span></button>
                <div class="dropdown-arrow dropdown-arrow-left"></div><!-- .dropdown-menu -->
                <div class="dropdown-menu">
                  <h6 class="dropdown-header d-none d-md-block d-lg-none"> <?= $_usuario->nome?> </h6><a class="dropdown-item" href="#"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="<?= base_url("logout") ?>"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                </div><!-- /.dropdown-menu -->
              </div><!-- /.btn-account -->
            </div><!-- /.top-bar-item -->
          </div><!-- /.top-bar-list -->
        </div><!-- /.top-bar -->
      </header><!-- /.app-header -->
      <!-- .app-aside -->
      <aside class="app-aside app-aside-expand-md app-aside-light">
        <!-- .aside-content -->
        <div class="aside-content">
          <!-- .aside-header -->
          <header class="aside-header d-block d-md-none">
            <!-- .btn-account -->
            <button class="btn-account" type="button" data-toggle="collapse" data-target="#dropdown-aside"><span class="user-avatar user-avatar-lg"><img src="<?= base_url_assets("assets/images/avatars/profile.jpg") ?>" alt=""></span> <span class="account-icon"><span class="fa fa-caret-down fa-lg"></span></span> <span class="account-summary"><span class="account-name"><?= $_usuario->nome ?></span> <span class="account-description"><?= $_usuario->super_usuario ?></span></span></button> <!-- /.btn-account -->
            <!-- .dropdown-aside -->
            <div id="dropdown-aside" class="dropdown-aside collapse">
              <!-- dropdown-items -->
              <div class="pb-3">
                <a class="dropdown-item" href="user-profile.html"><span class="dropdown-icon oi oi-person"></span> Profile</a> <a class="dropdown-item" href="auth-signin-v1.html"><span class="dropdown-icon oi oi-account-logout"></span> Logout</a>
                <div class="dropdown-divider"></div><a class="dropdown-item" href="#">Help Center</a> <a class="dropdown-item" href="#">Ask Forum</a> <a class="dropdown-item" href="#">Keyboard Shortcuts</a>
              </div><!-- /dropdown-items -->
            </div><!-- /.dropdown-aside -->
          </header><!-- /.aside-header -->
          <!-- .aside-menu -->
          <div class="aside-menu overflow-hidden">
            <!-- .stacked-menu -->
            <nav id="stacked-menu" class="stacked-menu">
              <!-- .menu -->
              <ul class="menu">
                <!-- .menu-item -->
                <li class="menu-item">
                  <a href="index.html" class="menu-link"><span class="menu-icon fas fa-home"></span> <span class="menu-text">Dashboard</span></a>
                </li><!-- /.menu-item -->
              </ul><!-- /.menu -->
            </nav><!-- /.stacked-menu -->
          </div><!-- /.aside-menu -->
          <!-- Skin changer -->
          <footer class="aside-footer border-top p-3">
            <button class="btn btn-light btn-block text-primary" data-toggle="skin">Night mode <i class="fas fa-moon ml-1"></i></button>
          </footer><!-- /Skin changer -->
        </div><!-- /.aside-content -->
      </aside><!-- /.app-aside -->
      <!-- .app-main -->
      <main class="app-main">
        <!-- .wrapper -->
        <div class="wrapper">
          <!-- .page -->
          <div class="page">
            <!-- .page-inner -->
            <div class="page-inner">
              <!-- .page-title-bar -->
              <header class="page-title-bar">
                <nav aria-label="breadcrumb">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                      <a href="#"><i class="breadcrumb-icon fa fa-angle-left mr-2"></i> Continuação </a>
                    </li>
                  </ol>
                </nav>
                <h1 class="page-title"> Passo a Passo </h1>
                <p class="text-muted"> Falta bem pouco. Estamos quase finalizando. </p>
              </header><!-- /.page-title-bar -->
              <!-- .page-section -->
              <div class="page-section">
                <!-- .section-block -->
                <div class="section-block">
                  <!-- Default Steps -->
                  <!-- .bs-stepper -->
                  <div id="stepper" class="bs-stepper">
                    <!-- .card -->
                    <div class="card">
                      <!-- .card-header -->
                      <div class="card-header">
                        <!-- .steps -->
                        <div class="steps steps-" role="tablist">
                          <ul>
                            <li class="step <?= $_usuario->email_valid == '1' ? 'success' : '' ?>" data-target="#test-l-1">
                              <a href="#" class="step-trigger" tabindex="-1"><span class="step-indicator step-indicator-icon"><i class="oi oi-envelope-open"></i></span> <span class="d-none d-sm-inline">Validar E-mail</span></a>
                            </li>
                            <li class="step" data-target="#test-l-2">
                              <a href="#" class="step-trigger" tabindex="-1"><span class="step-indicator step-indicator-icon"><i class="oi oi-account-login"></i></span> <span class="d-none d-sm-inline">Dados da Conta</span></a>
                            </li>
                            <li class="step" data-target="#test-l-3">
                              <a href="#" class="step-trigger" tabindex="-1"><span class="step-indicator step-indicator-icon"><i class="oi oi-person"></i></span> <span class="d-none d-sm-inline">Perfil</span></a>
                            </li>
                            <li class="step" data-target="#test-l-4">
                              <a href="#" class="step-trigger" tabindex="-1"><span class="step-indicator step-indicator-icon"><i class="oi oi-check"></i></span> <span class="d-none d-sm-inline">Confirmar</span></a>
                            </li>
                          </ul>
                        </div><!-- /.steps -->
                      </div><!-- /.card-header -->
                      <!-- .card-body -->
                      <div class="card-body">
                        <?= form_open("accounts/validade/hash", array("class" => "form", "id" => "formAccountHashEmail")) ?>
                          <!-- .content -->
                          <div id="test-l-1" class="content dstepper-none fade">
                            <!-- fieldset -->
                            <fieldset>
                              <legend>Informe a Chave de Segurança encaminha em seu E-mail</legend> <!-- .custom-control -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <input type="hidden" name="email" value="<?= $_usuario->email ?>" form="formAccountHashEmail">
                                  <input type="text" id="hash_email" class="form-control" name="hash_email" value="" data-parsley-group="fieldset02" placeholder="Chave de Segurança" form="formAccountHashEmail" required=""> <label for="hash_email">Chave de Segurança</label>
                                </div>
                              </div><!-- /.form-group -->
                              <hr class="mt-5">
                              <div class="d-flex">
                                <button type="button" class="next btn btn-primary ml-auto" data-validate="fieldset03">Next step</button>
                              </div>
                            </fieldset><!-- /fieldset -->
                          </div><!-- /.content -->
                        <?= form_close() ?>
                        <?= form_open("accounts/change/name", array("class" => "p-lg-4 p-sm-3 p-0", "id" => "stepper-form", "name" => "stepperForm")) ?>
                          <!-- .content -->
                          <div id="test-l-2" class="content dstepper-none fade">
                            <!-- fieldset -->
                            <fieldset>
                              <legend>Detalhes da sua conta</legend> <!-- .form-group -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <input type="text" id="inputNome" name="nome" class="form-control" value="<?= $_usuario->nome ?>" form="stepper-form" autocomplete="off" data-parsley-group="fieldset01" required=""> <label for="inputNome">Nome Completo</label>
                                </div>
                              </div><!-- /.form-group -->
                              <!-- .form-group -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <input type="email" id="email" name="email" class="form-control" value="<?= $_usuario->email ?>" form="stepper-form" autocomplete="off" data-parsley-group="fieldset01" > <label for="email">E-mail</label>
                                </div>
                              </div><!-- /.form-group -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <div class="invalid-feedback show"> Por favor entre com nome de Super Usuário. </div>
                                </div>
                              </div><!-- /.form-group -->
                              <hr class="mt-5">
                              <!-- .d-flex -->
                              <div class="d-flex">
                                <button type="button" class="prev btn btn-secondary">Previous</button>
                                <button type="button" class="next btn btn-primary ml-auto" form="stepper-form" data-validate="fieldset01">Next step</button>
                              </div><!-- /.d-flex -->
                            </fieldset><!-- /fieldset -->
                          </div><!-- /.content -->
                        <?= form_close() ?>
                        <?= form_open("accounts/change/perfil", array("class" => "form", "id" => "formAccountContinue")) ?>
                          <!-- .content -->
                          <div id="test-l-3" class="content dstepper-none fade">
                            <!-- fieldset -->
                            <fieldset>
                              <legend>Informação do Perfil</legend> <!-- .row -->
                              <div class="row">
                                <!-- grid column -->
                                <div class="col-md-6 mb-4">
                                  <div class="form-label-group">
                                    <input type="date" id="dt_nascimento" class="form-control" name="dt_nascimento" value="<?= empty($_usuario->dt_nascimento) ? '' : date("Y-m-d",strtotime($_usuario->dt_nascimento)) ?>" data-parsley-group="fieldset02" required=""> 
                                  </div>
                                  <div class="invalid-feedback"> Data inválida. </div>
                                </div><!-- /grid column -->
                                <!-- grid column -->
                                <div class="col-md-6 mb-4">
                                  <div class="form-label-group">
                                    <input type="text" id="celular" class="form-control" name="celular" value="<?= $_usuario->celular?>" data-parsley-group="fieldset02" placeholder="Numero de Celular" required=""> <label for="celular">Numero de Celular</label>
                                  </div>
                                  <div class="invalid-feedback"> Numero de Celular Inválido. </div>
                                </div><!-- /grid column -->
                              </div><!-- /.row -->
                              <!-- .form-group -->
                              <div class="form-group mb-4">
                                <div class="form-label-group">
                                  <input type="text" id="super_usuario" class="form-control" name="super_usuario" value="<?= $_usuario->super_usuario?>" data-parsley-group="fieldset02" placeholder="@Super Usuário" required=""> <label for="super_usuario">@Super Usuário</label>
                                </div>
                                <div class="invalid-feedback"> Por favor entre com nome de Super Usuário. </div>
                              </div><!-- /.form-group -->
                              <!-- .form-group -->
                              <div class="form-group mb-4">
                                <div class="custom-control custom-radio mb-4">
                                  <input type="radio" id="customRadioSexoMasculino" class="custom-control-input" name="sexo" value="m" required="" <?= $_usuario->sexo == "m" ? "checked" : "" ?>> <label class="custom-control-label" for="customRadioSexoMasculino">Masculino</label> <!-- .custom-control-hint -->
                                </div><!-- /.custom-control -->
                                <!-- .custom-control -->
                                <div class="custom-control custom-radio mb-4">
                                  <input type="radio" id="customRadioSexoFeminino" class="custom-control-input" name="sexo" value="f" <?= $_usuario->sexo == "m" ? "checked" : "" ?>> <label class="custom-control-label" for="customRadioSexoFeminino">Feminino</label> <!-- .custom-control-hint -->
                                </div>
                              </div><!-- /.form-group -->
                              <hr class="mt-5">
                              <div class="d-flex">
                                <button type="button" class="prev btn btn-secondary">Previous</button> <button type="button" class="next btn btn-primary ml-auto" data-validate="fieldset02">Next step</button>
                              </div>
                            </fieldset><!-- /fieldset -->
                          </div><!-- /.content -->
                        <?= form_close() ?>
                        <?= form_open("validate_continuar", array("class" => "form", "id" => "formAccountContinue")) ?>
                          <!-- .content -->
                          <div id="test-l-4" class="content dstepper-none fade">
                            <!-- fieldset -->
                            <fieldset>
                              <legend>Terms Agreement</legend> <!-- .card -->
                              <div class="card bg-light">
                                <div class="card-body overflow-auto" style="height: 260px">
                                  <p> Ad vero quidem sit magni, sed eum laudantium, alias, consequuntur commodi eveniet nesciunt debitis esse sint temporibus id magnam accusamus perferendis laborum? Nobis ducimus minus blanditiis voluptates et, eligendi laborum. Ea suscipit, aperiam libero id dicta quia architecto iusto tenetur, dignissimos veritatis adipisci et! Recusandae impedit repudiandae, quam sunt repellat quia iusto tempora temporibus alias deleniti, nulla? Laborum expedita optio quam quasi, esse magni sit tempore! </p>
                                  <p> Dicta asperiores ea voluptatum nihil quasi, officia tempora voluptates. Quidem reprehenderit nesciunt culpa, architecto iure, neque itaque suscipit, iusto, porro ipsum consequatur! </p>
                                  <p> Ad vero quidem sit magni, sed eum laudantium, alias, consequuntur commodi eveniet nesciunt debitis esse sint temporibus id magnam accusamus perferendis laborum? Nobis ducimus minus blanditiis voluptates et, eligendi laborum. Ea suscipit, aperiam libero id dicta quia architecto iusto tenetur, dignissimos veritatis adipisci et! Recusandae impedit repudiandae, quam sunt repellat quia iusto tempora temporibus alias deleniti, nulla? Laborum expedita optio quam quasi, esse magni sit tempore! </p>
                                  <p> Dicta asperiores ea voluptatum nihil quasi, officia tempora voluptates. Quidem reprehenderit nesciunt culpa, architecto iure, neque itaque suscipit, iusto, porro ipsum consequatur! </p>
                                </div>
                              </div><!-- /.card -->
                              <!-- .form-group -->
                              <div class="form-group">
                                <!-- .custom-control -->
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" id="agreement" name="agreement" class="custom-control-input" data-parsley-group="agreement" required=""> <label class="custom-control-label" for="agreement">Agree to terms and conditions</label>
                                </div><!-- /.custom-control -->
                              </div><!-- /.form-group -->
                              <hr class="mt-5">
                              <div class="d-flex">
                                <button type="button" class="prev btn btn-secondary">Previous</button> <button type="submit" class="submit btn btn-primary ml-auto" data-validate="agreement">Submit</button>
                              </div>
                            </fieldset><!-- /fieldset -->
                          </div><!-- /.content -->
                        <?= form_close() ?><!-- /form -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /.bs-stepper -->
                  <!-- toasts container -->
                  <div aria-live="polite" aria-atomic="true">
                    <!-- Position it -->
                    <div style="position: fixed; top: 4.5rem; right: 1rem; z-index: 1050">
                      <!-- .toast -->
                      <div id="submitfeedback" class="toast bg-dark border-dark text-light fade hide" data-delay="3000" role="alert" aria-live="assertive" aria-atomic="true">
                        <div class="toast-header bg-primary text-white"> See your browser console </div>
                        <div class="toast-body">
                          <strong>Congrats!</strong> You see the submit feedback. </div>
                      </div><!-- /.toast -->
                    </div>
                  </div><!-- /toasts container -->
                </div><!-- /.section-block -->
              </div><!-- /.page-section -->
            </div><!-- /.page-inner -->
          </div><!-- /.page -->
        </div><!-- .app-footer -->
        <footer class="app-footer">
          <ul class="list-inline">
            <li class="list-inline-item">
              <a class="text-muted" href="#">Support</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Help Center</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Privacy</a>
            </li>
            <li class="list-inline-item">
              <a class="text-muted" href="#">Terms of Service</a>
            </li>
          </ul>
          <div class="copyright"> Copyright © 2018. All right reserved. </div>
        </footer><!-- /.app-footer -->
        <!-- /.wrapper -->
      </main><!-- /.app-main -->
    </div><!-- /.app -->
    <!-- BEGIN BASE JS -->
    <script src="<?= base_url_assets("assets/vendor/jquery/jquery.min.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/bootstrap/js/popper.min.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/bootstrap/js/bootstrap.min.js") ?>"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="<?= base_url_assets("assets/vendor/pace/pace.min.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/stacked-menu/stacked-menu.min.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/parsleyjs/parsley.min.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/text-mask/vanillaTextMask.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/text-mask/addons/textMaskAddons.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/bs-stepper/js/bs-stepper.min.js") ?>"></script> <!-- END PLUGINS JS -->
    <script src="<?= base_url_assets("assets/vendor/toastr/toastr.min.js") ?>"></script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?= base_url_assets("assets/javascript/theme.min.js") ?>"></script> <!-- END THEME JS -->
    <!-- BEGIN PAGE LEVEL JS -->
    <script src="<?= base_url("assets/js/toastr-steps.js") ?>"></script>  <!-- END PAGE LEVEL JS -->
    <script src="<?= base_url("assets/js/steps-demo.js") ?>"></script>  <!-- END PAGE LEVEL JS -->
    <?php if($_usuario->email_valid == '1') : ?>
    <script>
      $(document).on('theme:init', function () {
        stepperDemo.next();
      });
    </script>
    <?php endif; ?>
    <script src="<?= base_url("assets/js/accounts.js") ?>" ></script>
  </body>
</html>