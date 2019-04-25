            <!-- .page-cover -->
            <header class="page-cover">
              <div class="text-center">
                <a href="user-profile.html" class="user-avatar user-avatar-xl"><img id="imgAvatarHeader" src="<?= base_url_assets("assets/images/avatars/$_usuario->imagem_perfil") ?>" alt=""></a>
                <h2 class="h4 mt-2 mb-0"> <?= $_usuario->nome ?> </h2>
                <div class="my-1">
                  <i class="fa fa-star text-yellow"></i>
                  <i class="far fa-star text-yellow"></i>
                  <i class="far fa-star text-yellow"></i>
                  <i class="far fa-star text-yellow"></i>
                  <i class="far fa-star text-yellow"></i>
                </div>
                <p class="text-muted"> Usuário <?= $_usuario->super_usuario ?> </p>
                <p> <?= $_usuario->biografia ?> </p>
              </div><!-- .cover-controls -->
              <div class="cover-controls cover-controls-bottom">
                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#followersModal">0 Followers</a>
                <a href="#" class="btn btn-light" data-toggle="modal" data-target="#followingModal">0 Following</a>
              </div><!-- /.cover-controls -->
            </header><!-- /.page-cover -->
            <!-- Followers Modal -->
            <!-- .modal -->
            <div class="modal fade" id="followersModal" tabindex="-1" role="dialog" aria-labelledby="followersModalLabel" aria-hidden="true">
              <!-- .modal-dialog -->
              <div class="modal-dialog modal-dialog-overflow" role="document">
                <!-- .modal-content -->
                <div class="modal-content">
                  <!-- .modal-header -->
                  <div class="modal-header">
                    <h6 id="followersModalLabel" class="modal-title"> Followers </h6>
                  </div><!-- /.modal-header -->
                  <!-- .modal-body -->
                  <div class="modal-body px-0">
                    <!-- .list-group -->
                    <div class="list-group list-group-flush list-group-divider border">
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces2.jpg") ?>" alt="Johnny Day"></a>
                        </div><!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Johnny Day</a>
                          </h4>
                          <p class="list-group-item-text"> Computer Hardware Engineer </p>
                        </div><!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div><!-- /.list-group-item-figure -->
                      </div><!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces3.jpg") ?>" alt="Sarah Bishop"></a>
                        </div><!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Sarah Bishop</a>
                          </h4>
                          <p class="list-group-item-text"> Designer </p>
                        </div><!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button type="button" class="btn btn-sm btn-primary">Follow</button>
                        </div><!-- /.list-group-item-figure -->
                      </div><!-- /.list-group-item -->
                    </div><!-- /.list-group -->
                    <!-- .loading -->
                    <div class="loading border-bottom">
                      <div class="loader loader-sm"></div>
                      <div class="sr-only"> Loading more content </div>
                    </div><!-- /.loading -->
                  </div><!-- /.modal-body -->
                  <!-- .modal-footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                  </div><!-- /.modal-footer -->
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- /Followers Modal -->
            <!-- Following Modal -->
            <!-- .modal -->
            <div class="modal fade" id="followingModal" tabindex="-1" role="dialog" aria-labelledby="followingModalLabel" aria-hidden="true">
              <!-- .modal-dialog -->
              <div class="modal-dialog modal-dialog-overflow" role="document">
                <!-- .modal-content -->
                <div class="modal-content">
                  <!-- .modal-header -->
                  <div class="modal-header">
                    <h6 id="followingModalLabel" class="modal-title"> Following </h6>
                  </div><!-- /.modal-header -->
                  <!-- .modal-body -->
                  <div class="modal-body px-0">
                    <!-- .list-group -->
                    <div class="list-group list-group-flush list-group-divider border">
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces2.jpg") ?>" alt="Johnny Day"></a>
                        </div><!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Johnny Day</a>
                          </h4>
                          <p class="list-group-item-text"> Computer Hardware Engineer </p>
                        </div><!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div><!-- /.list-group-item-figure -->
                      </div><!-- /.list-group-item -->
                      <!-- .list-group-item -->
                      <div class="list-group-item">
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <a href="#" class="user-avatar"><img src="<?= base_url_assets("assets/images/avatars/uifaces3.jpg") ?>" alt="Sarah Bishop"></a>
                        </div><!-- /.list-group-item-figure -->
                        <!-- .list-group-item-body -->
                        <div class="list-group-item-body">
                          <h4 class="list-group-item-title">
                            <a href="#">Sarah Bishop</a>
                          </h4>
                          <p class="list-group-item-text"> Designer </p>
                        </div><!-- /.list-group-item-body -->
                        <!-- .list-group-item-figure -->
                        <div class="list-group-item-figure">
                          <button class="btn btn-sm btn-secondary">Following</button>
                        </div><!-- /.list-group-item-figure -->
                      </div><!-- /.list-group-item -->
                    </div><!-- /.list-group -->
                    <!-- .loading -->
                    <div class="loading border-bottom">
                      <div class="loader loader-sm"></div>
                      <div class="sr-only"> Loading more content </div>
                    </div><!-- /.loading -->
                  </div><!-- /.modal-body -->
                  <!-- .modal-footer -->
                  <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-dismiss="modal">Close</button>
                  </div><!-- /.modal-footer -->
                </div><!-- /.modal-content -->
              </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
            <!-- /Following Modal -->
            <!-- .page-navs -->
            <nav class="page-navs">
              <!-- .nav-scroller -->
              <div class="nav-scroller">
                <!-- .nav -->
                <div class="nav nav-center nav-tabs">
                  <a class="nav-link <?= $css_menu_user == "overview" ? "active" : "" ?>" href="<?= base_url("accounts/view/overview") ?>">Overview</a> 
                  <a class="nav-link <?= $css_menu_user == "activities" ? "active" : "" ?>" href="<?= base_url("accounts/view/activities") ?>">Activities</a> 
                  <a class="nav-link <?= $css_menu_user == "teams" ? "active" : "" ?>" href="<?= base_url("accounts/view/teams") ?>">Teams</a> 
                  <a class="nav-link <?= $css_menu_user == "projects" ? "active" : "" ?>" href="<?= base_url("accounts/view/projects") ?>">Projects</a> 
                  <a class="nav-link <?= $css_menu_user == "tasks" ? "active" : "" ?>" href="<?= base_url("accounts/view/tasks") ?>">Tasks</a> 
                  <a class="nav-link <?= $css_menu_user == "configuracoes" ? "active" : "" ?>" href="<?= base_url("accounts/view/settings") ?>">Settings</a>
                </div><!-- /.nav -->
              </div><!-- /.nav-scroller -->
            </nav><!-- /.page-navs -->