<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!-- End Required meta tags -->
    <!-- Begin SEO tag -->
    <title> Sign In | Matilab </title>
    <meta property="og:title" content="Sign In">
    <meta name="author" content="Matheus de Mello">
    <meta property="og:locale" content="en_US">
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
    <!-- Favicons -->
    <link rel="apple-touch-icon" sizes="144x144" href="<?= base_url_assets("assets/apple-touch-icon.png") ?>">
    <link rel="shortcut icon" href="<?= base_url_assets("assets/favicon.ico") ?>">
    <meta name="theme-color" content="#3063A0"><!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet"><!-- End Google font -->
    <!-- BEGIN PLUGINS STYLES -->
    <link rel="stylesheet" href="<?= base_url_assets("assets/vendor/fontawesome/css/all.css") ?>"><!-- END PLUGINS STYLES -->
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
    <!--[if lt IE 10]>
    <div class="page-message" role="alert">You are using an <strong>outdated</strong> browser. Please <a class="alert-link" href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</div>
    <![endif]-->
    <!-- .auth -->
    <main class="auth">
      <header id="auth-header" class="auth-header" style="background-image: url(<?= base_url_assets("assets/images/illustration/img-1.png") ?>);">
        <h1>
          <img src="<?= base_url_assets("assets/images/brand-inverse.png") ?>" alt="" height="72"> <span class="sr-only">Sign In</span>
        </h1>
        <p> Não tem uma conta? <a href="<?= base_url('accounts/register') ?>">Crie sua conta</a>
        </p>
      </header><!-- form -->
        
        <?= form_open("accounts", array("class" => "auth-form", "id" => "formAccounts")) ?>
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="email" id="inputUser" class="form-control" autocomplete="current-password" name="email" placeholder="Enter E-mail" required="" autofocus=""> <label for="inputUser">E-mail</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <div class="form-label-group">
            <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="senha" required=""> <label for="inputPassword">Password</label>
          </div>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group">
          <button class="btn btn-lg btn-primary btn-block" id="enterAccount" type="submit">Sign In</button>
        </div><!-- /.form-group -->
        <!-- .form-group -->
        <div class="form-group text-center">
          <div class="custom-control custom-control-inline custom-checkbox">
            <input type="checkbox" class="custom-control-input" name="lembrar" id="remember-me"> <label class="custom-control-label" for="remember-me">Manter-me Logado</label>
          </div>
        </div><!-- /.form-group -->
        <!-- recovery links -->
        <div class="text-center pt-3">
          <a href="<?= base_url('forgot') ?>" class="link">Esqueceu Password?</a>
        </div><!-- /recovery links -->
      </form><!-- /.auth-form -->
      <!-- copyright -->
      <footer class="auth-footer"> © 2018 All Rights Reserved. <a href="#">Privacy</a> and <a href="#">Terms</a>
      </footer>
    </main><!-- /.auth -->
    <!-- BEGIN BASE JS -->
    <script src="<?= base_url_assets("assets/vendor/jquery/jquery.min.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/bootstrap/js/popper.min.js") ?>"></script>
    <script src="<?= base_url_assets("assets/vendor/bootstrap/js/bootstrap.min.js") ?>"></script> <!-- END BASE JS -->
    <!-- BEGIN PLUGINS JS -->
    <script src="<?= base_url_assets("assets/vendor/particles.js/particles.min.js") ?>"></script>
    <script>
      /**
       * Keep in mind that your scripts may not always be executed after the theme is completely ready,
       * you might need to observe the `theme:load` event to make sure your scripts are executed after the theme is ready.
       */
      $(document).on('theme:init', () =>
      {
        /* particlesJS.load(@dom-id, @path-json, @callback (optional)); */
        particlesJS.load('auth-header', '<?= base_url_assets("assets/javascript/pages/particles.json") ?>');
      })
    </script> <!-- END PLUGINS JS -->
    <!-- BEGIN THEME JS -->
    <script src="<?= base_url_assets("assets/javascript/theme.min.js") ?>"></script> <!-- END THEME JS -->
    <script src="<?= base_url("assets/js/accounts.js") ?>" ></script>
  </body>
</html>