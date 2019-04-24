                  <!-- grid column -->
                  <div class="col-lg-8">
                    <!-- .card -->
                    <div class="card card-fluid">
                      <h6 class="card-header"> Account </h6><!-- .card-body -->
                      <div class="card-body">
                        <!-- form -->
                        <form method="post">
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <div class="col-md-6 mb-3">
                              <label for="input01">Nome</label> <input type="text" class="form-control" name="nome" value="<?= $_usuario->nome ?>" required="">
                            </div><!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-6 mb-3">
                              <label for="input02">Data de Nascimento</label> <input type="date" class="form-control" name="dt_nascimento" value="<?= empty($_usuario->dt_nascimento) ? '' : date("Y-m-d",strtotime($_usuario->dt_nascimento)) ?>" required="">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- form row -->
                          <div class="form-row">
                            <!-- form column -->
                            <div class="col-md-6 mb-3">
                              <label for="input01">Celular</label> <input type="text" class="form-control" name="celular" value="<?= $_usuario->celular ?>" required="">
                            </div><!-- /form column -->
                            <!-- form column -->
                            <div class="col-md-6 mb-3">
                              <label for="input02">Sexo</label> <input type="text" class="form-control" value="Arisandi" required="">
                            </div><!-- /form column -->
                          </div><!-- /form row -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label for="input03">Email</label> <input type="email" class="form-control" name="email" value="<?= $_usuario->email ?>" required="">
                          </div><!-- /.form-group -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label for="input04">New Password</label> <input type="password" class="form-control" name="senha" value="" required="">
                          </div><!-- /.form-group -->
                          <!-- .form-group -->
                          <div class="form-group">
                            <label for="input05">Super Usuário</label> <input type="text" class="form-control" name="super_usuario" value="<?= $_usuario->super_usuario?>" required=""> <small class="text-muted"></small>
                          </div><!-- /.form-group -->
                          <hr>
                          <!-- .form-actions -->
                          <div class="form-actions">
                            <!-- enable submit btn when user type their current password -->
                            <input type="password" class="form-control mr-3" placeholder="Enter Current Password" required=""> <button type="submit" class="btn btn-primary text-nowrap ml-auto" disabled>Update Account</button>
                          </div><!-- /.form-actions -->
                        </form><!-- /form -->
                      </div><!-- /.card-body -->
                    </div><!-- /.card -->
                  </div><!-- /grid column -->