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
    <script src="<?= base_url("assets/js/steps-cadastro.js") ?>"></script>  <!-- END PAGE LEVEL JS -->
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