<div class="container-fluid" style="position:absolute; height: 100%; background-image:url('<?= base_url('assets/images/img_parallax.jpg') ?>');  background-position: center; background-repeat: no-repeat; background-size: cover; z-index: -1;"></div>
<section id="accounts">
    <div class="container col-lg-7" style="padding-top:300px;">
        <div class="card border-0 bg-transparent" >
            <div class="card-header border-0 bg-transparent">
               Recuperar Senha
            </div>
            <div class="card-body border-0">
                <?php if (isset($email_nao_encontrado)) : ?>
                    <div class="alert alert-danger alert-dismissible" id="message-danger" role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true" class="closeX">&times;</span>
                        </button>
                        <p id="msgError"><?= $email_nao_encontrado ?></p>
                    </div>
                <?php endif; ?>

                <?php if (isset($email_encontrado)) : ?>
                    <div class="alert alert-success alert-dismissible" id="message-danger"  role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true" class="closeX">&times;</span>
                        </button>
                        <p id="msgError"><?= $email_encontrado ?></p>
                    </div>
                <?php endif; ?>

                <?php if (isset($recuperado_sucesso)) : ?>
                    <div class="alert alert-success alert-dismissible" id="message-danger" 
                        <?= isset($recuperado_sucesso) ? "" : "style=\"display: none;\""; ?> role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true" class="closeX">&times;</span>
                        </button>
                        <p id="msgError"><?= $recuperado_sucesso ?></p>
                    </div>
                <?php endif; ?>

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
                    

                <?php if (empty($hash)) : ?>
                    <?= form_open("forgot", array("class" => "form-inline")) ?>
                        <div class="form-group w-75">
                            <input type="email" class="form-control w-100" id="email" name="email" placeholder="Enter email">
                        </div>
                        <input type="submit" class="btn btn-primary rounded-pill ml-3" value="Recuperar">
                    </form>
                <?php else : ?>
                    <?= form_open("forgot/$hash", array("class" => "form-inline")) ?>
                        <div class="form-group w-75">
                            <input type="password" class="form-control w-100" id="senha" name="senha"  placeholder="Informe a nova Senha">
                        </div>
                        <input type="submit" class="btn btn-primary rounded-pill ml-3" value="Recuperar">
                    </form>
                <?php endif; ?>

            </div>
        </div>
</section>