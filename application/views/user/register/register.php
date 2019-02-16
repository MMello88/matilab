<div class="container-fluid" style="position:absolute; height: 100%; background-image:url('<?= base_url('assets/images/pexels-photo-30732.jpg') ?>');  background-position: center; background-repeat: no-repeat; background-size: cover; z-index: -1;"></div>
<section id="register">
  <div class="container col-lg-7" style="padding-top:200px;">
    <div class="card " >
      <div class="card-header ">
        Registra-se
      </div>
      <div class="card-body border-0">
        <?php if (validation_errors()) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Ops!</strong> <?= validation_errors() ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php endif; ?>
        <?php if (isset($error)) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Ops!</strong> <?= $error ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php endif; ?>
        <?php if (isset($erro_cadastro)) : ?>
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
              <strong>Ops!</strong> <?= $erro_cadastro ?>
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
        <?php endif; ?>

        <?= form_open("Portal/register", array("class" => "form")) ?>
          <div class="form-group">
            <input type="nome" class="form-control"  id="nome" name="nome" placeholder="Nome">
          </div>
          <div class="form-group">
            <input type="email" class="form-control"  id="email" name="email" placeholder="Enter email">
          </div>

    			<div class="form-group form-group-no-border input-lg">
    				<div class="form-row">
              <div class="col-md-6">
    						<input type="password" class="input-lg form-control" id="senha" name="senha" placeholder="Senha" required>
    					</div>
    					<div class="col-md-6">
    						<input type="password" class="form-control" id="resenha" name="resenha" placeholder="Confirma a Senha" required>
    					</div>
    				</div>
    			</div>

    		  <input type="submit" class="btn btn-primary rounded-pill" value="Registrar">
        </form>

      </div>
    </div>
  </div>
</section>